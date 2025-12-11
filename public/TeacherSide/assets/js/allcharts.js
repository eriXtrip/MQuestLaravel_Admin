/*
  ================================
  Charts Module (Refactored)
  - Centralized chart lifecycle via ChartManager
  - Safe initialization per-chart (checks for canvas existence)
  - Removed undefined-global references and duplicate logic
  - Scoped variables to avoid collisions and runtime errors
  - Uses window.dashboardData when available
  ================================
*/
(() => {
  'use strict';

  // ================================
  // Chart Manager: handles create/replace behavior
  // ================================
  class ChartManager {
    constructor() { this.charts = {}; }

    createChart(canvasId, config) {
      const ctx = document.getElementById(canvasId)?.getContext('2d');
      if (!ctx) {
        // Canvas not present on this page; no-op.
        return null;
      }

      // Destroy previous instance if exists
      if (this.charts[canvasId]) {
        try { this.charts[canvasId].destroy(); } catch (_) {}
      }

      this.charts[canvasId] = new Chart(ctx, config);
      return this.charts[canvasId];
    }
  }

  // Expose a shared instance (optional for other scripts)
  const chartManager = new ChartManager();
  window.chartManager = chartManager;

  // ================================
  // Utilities & shared constants
  // ================================
  const SUBJECT_COLORS = {
    math: '#FFC107',
    english: '#2196F3',
    science: '#4CAF50',
    filipino: '#607D8B'
  };

  const subjectKeyMap = {
    mathematics: 'Mathematics',
    english: 'English',
    science: 'Science',
    filipino: 'Filipino'
  };


  function hexToRgb(hex) {
    const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result
      ? `${parseInt(result[1], 16)}, ${parseInt(result[2], 16)}, ${parseInt(result[3], 16)}`
      : '37, 99, 235'; // default to blue
  }

  // ================================
  // 1) Gender Doughnut Chart
  // ================================
  document.addEventListener('DOMContentLoaded', () => {
    const canvasId = 'genderChart';
    const ctx = document.getElementById(canvasId)?.getContext('2d');
    if (!ctx) return; // chart not on this page

    const genderStats = window.dashboardData?.gender_stats ?? { male: 0, female: 0, prefer_not_to_say: 0 };

    chartManager.createChart(canvasId, {
      type: 'doughnut',
      data: {
        labels: ['Male', 'Female', 'Others'],
        datasets: [{
          data: [
            genderStats.male ?? 0,
            genderStats.female ?? 0,
            genderStats.prefer_not_to_say ?? 0
          ],
          backgroundColor: ['#131150', '#e83e8c', '#858796'],
          borderColor: '#fff',
          borderWidth: 2
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: { position: 'bottom', labels: { font: { size: 12 } } },
          tooltip: {
            callbacks: {
              label: function (context) {
                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                const percentage = total ? Math.round((context.parsed / total) * 100) : 0;
                return `${context.label}: ${context.parsed} (${percentage}%)`;
              }
            }
          }
        }
      }
    });
  });

  // ================================
  // 2) Performance Line Chart (Quarterly by subject)
  // ================================
  (function initPerformanceLineChart() {
    const rawData = window.dashboardData?.overall_class_performance || [];

    // Transform rawData into { q1: { english: [], math: [], ... }, q2: {...} }
    const quarterlyData = { q1: {}, q2: {}, q3: {}, q4: {} };

    rawData.forEach(item => {
      const qKey = `q${item.quarter}`;
      const subjKey = item.subject_name.toLowerCase() === 'mathematics' ? 'math' : item.subject_name.toLowerCase();

      if (!quarterlyData[qKey][subjKey]) quarterlyData[qKey][subjKey] = [];

      // Fill the lesson number index (lesson_number starts at 1)
      quarterlyData[qKey][subjKey][item.lesson_number - 1] = item.avg_grade;
    });

    const defaultLabels = ['Lesson 1','Lesson 2','Lesson 3','Lesson 4','Lesson 5','Lesson 6','Lesson 7','Lesson 8'];
    const SUBJECT_COLORS = { english: '#3b82f6', filipino: '#ef4444', math: '#f59e0b', science: '#10b981' };

    function hexToRgb(hex) {
      const bigint = parseInt(hex.replace('#',''),16);
      const r = (bigint >> 16) & 255;
      const g = (bigint >> 8) & 255;
      const b = bigint & 255;
      return `${r}, ${g}, ${b}`;
    }

    function createDatasets(quarterData, subjectFilter = 'all') {
      const datasets = [];
      const subjectsToUse = subjectFilter === 'all' ? Object.keys(SUBJECT_COLORS) : [subjectFilter];

      subjectsToUse.forEach(subject => {
        const data = quarterData?.[subject] || [];
        const color = SUBJECT_COLORS[subject] || '#999999';
        datasets.push({
          label: subject.charAt(0).toUpperCase() + subject.slice(1),
          data,
          borderColor: color,
          backgroundColor: `rgba(${hexToRgb(color)}, 0.1)`,
          borderWidth: 3,
          pointBackgroundColor: color,
          pointRadius: 5,
          pointHoverRadius: 7,
          fill: true,
          tension: 0.3
        });
      });

      return datasets;
    }

    function updatePerformanceChart(chart) {
      const subject = document.getElementById('line-chart-subject-filter')?.value?.toLowerCase() || 'all';
      const quarter = document.getElementById('line-chart-quarter-filter')?.value || 'q1';
      chart.data.datasets = createDatasets(quarterlyData[quarter] || {}, subject);
      chart.update();
    }

    document.addEventListener('DOMContentLoaded', () => {
      const canvas = document.getElementById('performanceChart');
      if (!canvas) return;

      const chart = chartManager.createChart('performanceChart', {
        type: 'line',
        data: {
          labels: defaultLabels,
          datasets: createDatasets(quarterlyData.q1)
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: { legend: { position: 'top' }, tooltip: { mode: 'index', intersect: false } },
          scales: {
            y: { beginAtZero: false, min: 0, max: 100, title: { display: true, text: 'Score (%)' }, grid: { color: 'rgba(0,0,0,0.1)' } },
            x: { grid: { display: false } }
          }
        }
      });

      const subjectFilterEl = document.getElementById('line-chart-subject-filter');
      const quarterFilterEl = document.getElementById('line-chart-quarter-filter');
      if (subjectFilterEl) subjectFilterEl.addEventListener('change', () => updatePerformanceChart(chart));
      if (quarterFilterEl) quarterFilterEl.addEventListener('change', () => updatePerformanceChart(chart));
    });
  })();


  // ================================
  // 3) Lesson Progress Trend Chart (Dynamic demo)
  // ================================
  
  //Get the lesson with highest progress and display it in the insight
    function generateLessonInsight(subjectName, progressArray) {
      if (!progressArray || progressArray.length === 0) {
          return `No progress data available for ${subjectName}.`;
      }

      // Find highest progress value
      let maxValue = Math.max(...progressArray);

      // If max is 0 = no real progress yet
      if (maxValue === 0) {
          return `${subjectName} has no recorded progress yet for this quarter.`;
      }

      // Find the lesson index of the highest value
      let maxIndex = progressArray.indexOf(maxValue);

      // Convert index → Lesson number
      let lessonName = `Lesson ${maxIndex + 1}`;

      return `${subjectName} shows its highest progress in ${lessonName} with ${maxValue}%.`;
  }

  document.addEventListener('DOMContentLoaded', function () {
    const canvasId = 'lessonProgressChart';
    if (!document.getElementById(canvasId)) return;

    const lessonLabels = ['Lesson 1','Lesson 2','Lesson 3','Lesson 4','Lesson 5','Lesson 6','Lesson 7','Lesson 8','Lesson 9','Lesson 10','Lesson 11'];
    const subjectColors = { English: '#2196F3', Filipino: '#607D8B', Mathematics: '#FFC107', Science: '#4CAF50' };

    const progressDataRaw = window.dashboardData.quarterlyProgress || {};
    const progressData = { 1:{},2:{},3:{},4:{} };

    ['q1','q2','q3','q4'].forEach((q,i) => {
        const quarterNum = i+1;
        Object.keys(subjectColors).forEach(subject => {
            progressData[quarterNum][subject] = (progressDataRaw[q] && progressDataRaw[q][subject]) || [];
        });
    });

    let currentQuarter = '1';
    let selectedSubject = 'all'; // default subject

    function getDatasets() {
        const datasets = [];
        if (selectedSubject === 'all') {
            Object.keys(subjectColors).forEach(subject => {
                datasets.push({
                    label: subject,
                    data: progressData[currentQuarter][subject] || [],
                    borderColor: subjectColors[subject],
                    backgroundColor: 'transparent',
                    borderWidth: 2,
                    pointBackgroundColor: '#fff',
                    pointBorderColor: subjectColors[subject],
                    pointRadius: 4,
                    tension: 0.3
                });
            });
        } else {
            /*datasets.push({
                label: selectedSubject.charAt(0).toUpperCase() + selectedSubject.slice(1),
                data: progressData[currentQuarter][selectedSubject.charAt(0).toUpperCase() + selectedSubject.slice(1)] || [],
                borderColor: subjectColors[selectedSubject.charAt(0).toUpperCase() + selectedSubject.slice(1)],
                backgroundColor: 'transparent',
                borderWidth: 4,
                pointBackgroundColor: '#fff',
                pointBorderColor: subjectColors[selectedSubject.charAt(0).toUpperCase() + selectedSubject.slice(1)],
                pointRadius: 5,
                tension: 0.4
            });*/
            const mappedSubject = subjectKeyMap[selectedSubject];

            datasets.push({
                label: mappedSubject,
                data: progressData[currentQuarter][mappedSubject] || [],
                borderColor: subjectColors[mappedSubject],
                backgroundColor: 'transparent',
                borderWidth: 4,
                pointBackgroundColor: '#fff',
                pointBorderColor: subjectColors[mappedSubject],
                pointRadius: 5,
                tension: 0.4
            });
        }
        return datasets;
    }

    function createLessonProgressChart() {
        const config = {
            type: 'line',
            data: { labels: lessonLabels, datasets: getDatasets() },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: { beginAtZero: true, max: 100, ticks: { stepSize: 20 }, grid: { color: '#e2e8f0' } },
                    x: { grid: { color: '#f3f4f6' } }
                },
                plugins: {
                    legend: { position: 'bottom', labels: { usePointStyle: true } },
                    tooltip: { mode: 'index', intersect: false }
                }
            }
        };
        chartManager.createChart(canvasId, config);

       /*const insights = document.getElementById('chartInsights');
        /*if (insights) {
            if (selectedSubject === 'all') {
                insights.textContent = `Viewing all subjects for Quarter ${currentQuarter}.`;
            } else {
                insights.textContent = `${selectedSubject.charAt(0).toUpperCase() + selectedSubject.slice(1)} shows improvement in Quarter ${currentQuarter}.`;
            }
        }*/
       /*if (insights) {
          if (selectedSubject === 'all') {
              insights.textContent = `Viewing all subjects for Quarter ${currentQuarter}. Select a subject to view detailed insights.`;
          } else {
              const formatted = selectedSubject.charAt(0).toUpperCase() + selectedSubject.slice(1);
              const data = progressData[currentQuarter][formatted] || [];
              insights.textContent = generateLessonInsight(formatted, data);
          }
      }*/
     const insightsSpan = document.querySelector('#chartInsights span');

      if (insightsSpan) {
          if (selectedSubject === 'all') {
              insightsSpan.textContent = `Viewing all subjects for Quarter ${currentQuarter}. Select a subject to view detailed insights.`;
          } else {
              const mappedSubject = subjectKeyMap[selectedSubject]; // <--- FIX HERE
              const data = progressData[currentQuarter][mappedSubject] || [];

              insightsSpan.textContent = generateLessonInsight(mappedSubject, data);
          }
      }
    }

    // Filters
    const subjectView = document.getElementById('subjectView');
    const quarterFilter = document.getElementById('quarterFilter');

    subjectView?.addEventListener('change', e => {
        selectedSubject = e.target.value;
        createLessonProgressChart();
    });

    quarterFilter?.addEventListener('change', e => {
        currentQuarter = e.target.value;
        createLessonProgressChart();
    });

    // Initial render
    createLessonProgressChart();
});



  // ================================
  // 4) Quarter Comparison Bar Chart (Demo)
  // ================================
  document.addEventListener('DOMContentLoaded', function () {
    const canvasId = 'quarterComparisonChart';
    if (!document.getElementById(canvasId)) return;

    const colors = { Mathematics: '#FFC107', Science: '#4CAF50', English: '#2196F3', Filipino: '#607D8B' };
    const subjects = Object.keys(colors);

    const progressDataRaw = window.dashboardData.quarterlyProgress || {};

    const subjectData = subjects.map(subject => {
        const quarters = [1, 2, 3, 4].map((qNum, i) => {
            const quarterKey = 'q' + (i + 1);
            const arr = progressDataRaw[quarterKey]?.[subject] || [];
            if (arr.length === 0) return 0;
            const sum = arr.reduce((a, b) => a + b, 0);
            return Math.round(sum / arr.length);
        });
        return { subject, quarters };
    });

    let currentView = 'all'; // "all" or specific subject name in lowercase

    function getDatasets() {
        if (currentView === 'all') {
            return subjectData.map(sub => ({
                label: sub.subject,
                data: sub.quarters,
                backgroundColor: colors[sub.subject],
                borderRadius: 8,
                borderSkipped: false
            }));
        } else {
            const sub = subjectData.find(s => s.subject.toLowerCase() === currentView);
            if (!sub) return [];
            return [{
                label: sub.subject,
                data: sub.quarters,
                backgroundColor: colors[sub.subject],
                borderRadius: 8,
                borderSkipped: false,
                barThickness: 50
            }];
        }
    }

    function createQuarterComparisonChart() {
        const config = {
            type: 'bar',
            data: { labels: ['Quarter 1', 'Quarter 2', 'Quarter 3', 'Quarter 4'], datasets: getDatasets() },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: { beginAtZero: true, max: 100, grid: { color: '#e2e8f0' }, ticks: { stepSize: 25 } },
                    x: { grid: { display: false } }
                },
                plugins: {
                    legend: { position: 'bottom', labels: { usePointStyle: true } },
                    tooltip: { mode: 'index', intersect: false }
                },
                animation: { duration: 800, easing: 'easeOutQuart' }
            }
        };

        chartManager.createChart(canvasId, config);

        const insights = document.getElementById('bar-chartInsights');
        if (insights) {
          if (currentView !== 'all') {
            const sub = subjectData.find(s => s.subject.toLowerCase() === currentView);
            const availableQuarters = sub.quarters
              .map((val, idx) => ({ val, idx }))
              .filter(q => q.val != null && q.val > 0);

            if (availableQuarters.length) {
              const maxQuarter = availableQuarters.reduce((a, b) => (b.val > a.val ? b : a));
              const quarterName = ['Q1', 'Q2', 'Q3', 'Q4'][maxQuarter.idx];
              insights.innerHTML = `${quarterName} shows the highest performance in <span>${sub.subject}</span>.`;
            } else {
              insights.innerHTML = `No data available for ${sub.subject}.`;
            }
          } else {
            const quarters = ['Q1', 'Q2', 'Q3', 'Q4'];
            const qMax = [];

            for (let i = 0; i < 4; i++) {
              let maxVal = 0;
              let maxSub = null;
              subjectData.forEach(sub => {
                const val = sub.quarters[i] || 0;
                if (val > maxVal) {
                  maxVal = val;
                  maxSub = sub.subject;
                }
              });
              if (maxVal > 0 && maxSub) qMax.push(`${quarters[i]}-${maxSub}`);
            }

            if (qMax.length) {
              insights.innerHTML = `Highest subject per quarter: ${qMax.join(', ')}.`;
            } else {
              insights.innerHTML = 'No quarter data available.';
            }
          }
        }
    }

    const subjectViewSelect = document.getElementById('bar-subjectView');
    if (subjectViewSelect) {
        subjectViewSelect.addEventListener('change', (e) => {
            currentView = e.target.value.toLowerCase();
            createQuarterComparisonChart();
        });
    }

    createQuarterComparisonChart();
});



  // ================================
  // 5) Engagement vs Mastery Radar Chart (Mathematics vs All Subjects)
  // ================================
  document.addEventListener('DOMContentLoaded', function () {
      const canvas = document.getElementById('radarChart');
      if (!canvas) return;

      let currentPupil = null;
      let currentSubject = 'all';  // 'all' or 'Mathematics', 'Science', etc.
      let currentQuarter = 1;
      let radarChartInstance = null;

      // Helper: Get radar data from pupil's lesson_progress
      function getRadarData(pupil, subject = 'all', quarter = 1) {
          const lessonProgress = pupil?.lesson_progress || {};
          const result = { labels: [], engagement: [], mastery: [] };

          if (subject === 'all') {
              const subjects = ['English', 'Filipino', 'Mathematics', 'Science'];
              subjects.forEach(subj => {
                  const lessons = (lessonProgress[subj] || []).filter(l => l.quarter == quarter);
                  if (lessons.length > 0) {
                      const avgEng = lessons.reduce((a, l) => a + Number(l.engagement_percent), 0) / lessons.length;
                      const avgMas = lessons.reduce((a, l) => a + Number(l.mastery_percent), 0) / lessons.length;
                      result.labels.push(subj);
                      result.engagement.push(Math.round(avgEng));
                      result.mastery.push(Math.round(avgMas));
                  }
              });
          } else {
              const lessons = (lessonProgress[subject] || []).filter(l => l.quarter == quarter);
              if (lessons.length === 0) {
                  result.labels = [`No data for ${subject} Q${quarter}`];
                  result.engagement = [0];
                  result.mastery = [0];
              } else {
                  lessons.forEach(l => {
                      result.labels.push(`L${l.lesson_number}`);
                      result.engagement.push(Math.round(Number(l.engagement_percent)));
                      result.mastery.push(Math.round(Number(l.mastery_percent)));
                  });
              }
          }
          return result;
      }

      // Update insight text
      function updateInsight() {
          const insightEl = document.getElementById('radarPupil-InsightText');
          const subtitleEl = document.getElementById('radarChartSubtitle');
          if (!insightEl || !currentPupil) return;

          if (currentSubject === 'all') {
              insightEl.textContent = "Mathematics leads across all quarters with consistent growth.";
              subtitleEl.textContent = "High-level overview across subjects";
          } else {
              const data = getRadarData(currentPupil, currentSubject, currentQuarter);
              if (data.mastery.length === 0) {
                  insightEl.textContent = `No lesson data available for ${currentSubject} in Quarter ${currentQuarter}.`;
              } else {
                  const maxMastery = Math.max(...data.mastery);
                  const bestIdx = data.mastery.indexOf(maxMastery);
                  insightEl.textContent = `Strongest in Lesson ${bestIdx + 1} with ${maxMastery}% mastery.`;
              }
              subtitleEl.textContent = `Detailed lesson analysis: ${currentSubject} (Quarter ${currentQuarter})`;
          }
      }

      // Main render function
      window.initRadarChartForPupil = function(pupil, subject = 'all', quarter = 1) {
          currentPupil = pupil;
          currentSubject = subject;
          currentQuarter = quarter;

          const data = getRadarData(pupil, subject, quarter);

          const config = {
              type: 'radar',
              data: {
                  labels: data.labels,
                  datasets: [
                      {
                          label: 'Engagement (%)',
                          data: data.engagement,
                          fill: true,
                          backgroundColor: 'rgba(59, 130, 246, 0.2)',
                          borderColor: '#3B82F6',
                          pointBackgroundColor: '#3B82F6',
                          pointBorderColor: '#fff',
                          tension: 0.3
                      },
                      {
                          label: 'Mastery (%)',
                          data: data.mastery,
                          fill: true,
                          backgroundColor: 'rgba(16, 185, 129, 0.2)',
                          borderColor: '#10B981',
                          pointBackgroundColor: '#10B981',
                          pointBorderColor: '#fff',
                          tension: 0.3
                      }
                  ]
              },
              options: {
                  responsive: true,
                  maintainAspectRatio: false,
                  scales: {
                      r: {
                          angleLines: { color: '#e2e8f0' },
                          grid: { color: '#e2e8f0' },
                          suggestedMin: 0,
                          suggestedMax: 100,
                          ticks: { stepSize: 20, color: '#475569' },
                          pointLabels: { color: '#334155', font: { size: 11 } }
                      }
                  },
                  plugins: {
                      legend: { position: 'bottom' },
                      tooltip: {
                          callbacks: {
                              title: function(context) {
                                  if (currentSubject !== 'all') {
                                      const idx = context[0].dataIndex;
                                      const lesson = (currentPupil.lesson_progress[currentSubject] || [])
                                          .find(l => l.lesson_number === idx + 1 && l.quarter == currentQuarter);
                                      return lesson ? `L${lesson.lesson_number}: ${lesson.lesson_title}` : context[0].label;
                                  }
                                  return context[0].label;
                              }
                          }
                      }
                  }
              }
          };

          // Destroy previous chart if exists
          if (radarChartInstance) {
              radarChartInstance.destroy();
          }

          const ctx = canvas.getContext('2d');
          radarChartInstance = new Chart(ctx, config);

          // Update texts
          updateInsight();
      };

      // === Filter Event Listeners ===
      const subjectFilter = document.getElementById('pupilSubjectfilter');
      const quarterFilter = document.getElementById('pupilquarterFilter');

      if (subjectFilter) {
          subjectFilter.addEventListener('change', function() {
              currentSubject = this.value;
              if (currentPupil) {
                  window.initRadarChartForPupil(currentPupil, currentSubject, currentQuarter);
              }
          });
      }

      if (quarterFilter) {
          quarterFilter.addEventListener('change', function() {
              currentQuarter = parseInt(this.value);
              if (currentPupil) {
                  window.initRadarChartForPupil(currentPupil, currentSubject, currentQuarter);
              }
          });
      }
  });


  // ================================
  // 6) Optional: Pupil-specific Radar helpers (no auto-render)
  // - Kept for potential integration, but no longer auto-run or reference undefined globals.
  // ================================
  function getRadarDataFromPupil(pupil, subject = 'all', quarter = 1) {
    const lessonProgress = pupil?.lesson_progress || {};
    const out = { labels: [], engagement: [], mastery: [] };

    if (subject === 'all') {
      const subjects = ['English', 'Filipino', 'Mathematics', 'Science'];
      subjects.forEach(subj => {
        const lessons = (lessonProgress[subj] || []).filter(l => l.quarter == quarter);
        if (lessons.length) {
          const avgEngagement = lessons.reduce((a, l) => a + Number(l.engagement_percent), 0) / lessons.length;
          const avgMastery = lessons.reduce((a, l) => a + Number(l.mastery_percent), 0) / lessons.length;
          out.labels.push(subj);
          out.engagement.push(avgEngagement);
          out.mastery.push(avgMastery);
        }
      });
    } else {
      const lessons = (lessonProgress[subject] || []).filter(l => l.quarter == quarter);
      lessons.forEach(l => {
        out.labels.push(`L${l.lesson_number}: ${l.lesson_title}`);
        out.engagement.push(Number(l.engagement_percent));
        out.mastery.push(Number(l.mastery_percent));
      });
    }

    return out;
  }

  function buildPupilRadarConfig({ labels, engagement, mastery }) {
    return {
      type: 'radar',
      data: {
        labels,
        datasets: [
          {
            label: 'Engagement (%)',
            data: engagement,
            fill: true,
            backgroundColor: 'rgba(59, 130, 246, 0.2)',
            borderColor: '#3B82F6',
            pointBackgroundColor: '#3B82F6',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#3B82F6'
          },
          {
            label: 'Mastery (%)',
            data: mastery,
            fill: true,
            backgroundColor: 'rgba(16, 185, 128, 0.2)',
            borderColor: '#10B981',
            pointBackgroundColor: '#10B981',
            pointBorderColor: '#fff',
            pointHoverBackgroundColor: '#10B981'
          }
        ]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: { r: { angleLines: { color: '#e2e8f0' }, grid: { color: '#e2e8f0' }, pointLabels: { font: { size: window.innerWidth < 576 ? 8 : 11 } }, suggestedMin: 0, suggestedMax: 100 } },
        plugins: { legend: { position: 'bottom' } }
      }
    };
  }

  // Overall Insights - Teacher side Analytics
  document.addEventListener('DOMContentLoaded', () => {
    const progressDataRaw = window.dashboardData.quarterlyProgress || {};
    const subjects = ['Mathematics','Science','English','Filipino'];

    const insightsContainer = document.querySelector('.insights-container');

    if (!insightsContainer) return;

    // Prepare subject averages
    const subjectAverages = subjects.map(subject => {
        let allScores = [];
        ['q1','q2','q3','q4'].forEach(q => {
            const scores = progressDataRaw[q]?.[subject] || [];
            allScores.push(...scores);
        });
        const avg = allScores.length ? Math.round(allScores.reduce((a,b)=>a+b,0)/allScores.length) : 0;
        return { subject, avg, allScores };
    });

    const strongTitle = document.querySelector('.strong-performance .insight-title span');
    const strongDesc = document.querySelector('.strong-performance .insight-description span');

    // check if there is valid subject data
    const validSubjects = (subjectAverages || []).filter(s => s.subject && s.avg > 0);

    if (validSubjects.length === 0) {
        // ❌ No valid data
        if (strongTitle) strongTitle.textContent = "Strong Performance";
        if (strongDesc) strongDesc.textContent = "No data available to determine strong performance.";
    } else {
        // ✅ Use valid subjects only
        const bestSubject = validSubjects.reduce(
            (prev, curr) => curr.avg > prev.avg ? curr : prev
        );

        if (strongTitle) strongTitle.textContent = `Strong Performance in ${bestSubject.subject}`;
        if (strongDesc) strongDesc.textContent =
            `${bestSubject.subject} shows consistent improvement with ${bestSubject.avg}% average score across recent lessons.`;
    }




    // 2️⃣ Focus Area: lesson with lowest average in best subject
    let focusLessonIndex = 0;
    let minScore = 101;
    bestSubject.allScores.forEach((score, i) => {
        if(score < minScore){
            minScore = score;
            focusLessonIndex = i;
        }
    });
    const focusCardTitle = insightsContainer.querySelector('.focus-area .insight-text .insight-title span');
    const focusCardDesc = insightsContainer.querySelector('.focus-area .insight-text .insight-description span');
    if(focusCardTitle) focusCardTitle.textContent = `Focus Area: Lesson ${focusLessonIndex+1}`;
    if(focusCardDesc) focusCardDesc.textContent = `Lesson ${focusLessonIndex+1} shows lower engagement (${minScore}%) compared to other lessons in ${bestSubject.subject}. Recommend adding more interactive activities, practice problems, and providing additional support materials.`;

    // 3️⃣ Progressive Improvement: Q1 vs Q4 trend
    const firstQuarter = progressDataRaw['q1']?.[bestSubject.subject] || [];
    const lastQuarter = progressDataRaw['q4']?.[bestSubject.subject] || [];
    const firstAvg = firstQuarter.length ? Math.round(firstQuarter.reduce((a,b)=>a+b,0)/firstQuarter.length) : 0;
    const lastAvg = lastQuarter.length ? Math.round(lastQuarter.reduce((a,b)=>a+b,0)/lastQuarter.length) : 0;
    const trendCardDesc = insightsContainer.querySelector('.progressive-improvement .insight-text .insight-description span');
    if(trendCardDesc) trendCardDesc.textContent = `Quarter-over-quarter analysis shows a ${lastAvg >= firstAvg ? 'positive' : 'negative'} trend in ${bestSubject.subject}. Q4 performance (${lastAvg}%) represents a ${lastAvg - firstAvg} point ${lastAvg >= firstAvg ? 'improvement' : 'decline'} from Q1 (${firstAvg}%). Maintain current teaching methods and continue to provide varied learning materials.`;
});





  // Export helpers (optional usage by other scripts)
  window.getRadarDataFromPupil = getRadarDataFromPupil;
  window.buildPupilRadarConfig = buildPupilRadarConfig;
})();


