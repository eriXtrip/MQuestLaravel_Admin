// ================================
// Chart Manager for static charts (All Type of Charts)
// ================================
class ChartManager {
  constructor() {
    this.charts = {};
  }

  createChart(canvasId, config) {
    const ctx = document.getElementById(canvasId)?.getContext('2d');
    if (!ctx) {
      console.warn(`Canvas with ID "${canvasId}" not found.`);
      return null;
    }

    if (this.charts[canvasId]) {
      this.charts[canvasId].destroy();
    }

    this.charts[canvasId] = new Chart(ctx, config);
    return this.charts[canvasId];
  }
}

const chartManager = new ChartManager();

// ================================
// 1. Radar Chart 
// ================================

// ========= DATA SIMULATION =========
const lessonTitles = [
  'Fractions', 'Decimals', 'Percentages', 'Ratios',
  'Algebra', 'Geometry', 'Measurements', 'Data Interpretation'
];

const dataAllSubjects = {
  Q1: { engagement: [95, 90, 80, 88], mastery: [90, 75, 85, 65] },
  Q2: { engagement: [92, 88, 78, 85], mastery: [87, 80, 82, 70] },
  Q3: { engagement: [89, 83, 75, 80], mastery: [85, 78, 80, 68] },
  Q4: { engagement: [96, 91, 79, 90], mastery: [93, 85, 82, 75] }
};

const dataMath = {
  Q1: { engagement: [85, 82, 78, 80, 86, 88, 83, 81], mastery: [88, 85, 79, 83, 90, 87, 84, 86] },
  Q2: { engagement: [88, 84, 82, 85, 89, 91, 86, 88], mastery: [90, 86, 83, 86, 92, 90, 88, 89] },
  Q3: { engagement: [86, 83, 80, 84, 87, 90, 85, 86], mastery: [89, 85, 82, 85, 90, 89, 87, 88] },
  Q4: { engagement: [89, 88, 83, 86, 92, 95, 89, 91], mastery: [91, 89, 85, 88, 95, 94, 90, 93] }
};

// ========= RADAR CHART CREATION FUNCTION =========
function createRadarChartConfig(subject = 'all', quarter = 'Q1') {
  let labels, engagement, mastery;
  let subtitle = '';
  let insight = '';

  if (subject === 'all') {
    labels = ['English', 'Filipino', 'Mathematics', 'Science'];
    engagement = dataAllSubjects[quarter].engagement;
    mastery = dataAllSubjects[quarter].mastery;
    subtitle = 'High-level overview across subjects';

    const minIndex = engagement.indexOf(Math.min(...engagement));
    const subjects = ['English', 'Filipino', 'Mathematics', 'Science'];
    const lowSubject = subjects[minIndex];
    insight = `${lowSubject} needs attention with lower engagement and mastery scores.`;
  } else {
    labels = lessonTitles.map((l, i) => `L${i + 1}`);
    engagement = dataMath[quarter].engagement;
    mastery = dataMath[quarter].mastery;
    subtitle = 'Detailed lesson analysis for Mathematics';

    const minIndex = engagement.indexOf(Math.min(...engagement));
    const maxIndex = mastery.indexOf(Math.max(...mastery));
    const lowLesson = `Lesson ${minIndex + 1} (${lessonTitles[minIndex]})`;
    const highLesson = `Lesson ${maxIndex + 1} (${lessonTitles[maxIndex]})`;
    insight = `${lowLesson} shows lower engagement, while ${highLesson} excels with highest mastery.`;
  }

  // Update UI text elements if they exist
  const subtitleEl = document.getElementById('radarChartSubtitle');
  const insightEl = document.getElementById('radarPupil-InsightText');
  if (subtitleEl) subtitleEl.textContent = subtitle;
  if (insightEl) insightEl.textContent = insight;

  // Prepare point colors conditionally for math mode
  const getEngagementPointColor = (value, idx) => {
    if (subject === 'math' && idx === mastery.indexOf(Math.max(...mastery))) {
      return '#10B981'; // highlight mastery peak in engagement
    }
    return '#3B82F6';
  };

  const getMasteryPointColor = (value, idx) => {
    if (subject === 'math' && idx === mastery.indexOf(Math.max(...mastery))) {
      return '#FFD700'; // gold for top mastery lesson
    }
    return '#10B981';
  };

  return {
    type: 'radar',
    data: {
      labels: labels,
      datasets: [
        {
          label: 'Engagement (%)',
          data: engagement,
          fill: true,
          backgroundColor: 'rgba(59, 130, 246, 0.2)',
          borderColor: '#3B82F6',
          pointBackgroundColor: engagement.map(getEngagementPointColor),
          pointBorderColor: '#fff',
          pointHoverBackgroundColor: '#3B82F6'
        },
        {
          label: 'Mastery (%)',
          data: mastery,
          fill: true,
          backgroundColor: 'rgba(16, 185, 128, 0.2)',
          borderColor: '#10B981',
          pointBackgroundColor: mastery.map(getMasteryPointColor),
          pointBorderColor: '#fff',
          pointHoverBackgroundColor: '#10B981'
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
          pointLabels: {
            font: { size: window.innerWidth < 576 ? 8 : 11 }
          },
          suggestedMin: 0,
          suggestedMax: 100
        }
      },
      plugins: {
        legend: { position: 'bottom' },
        tooltip: {
          callbacks: {
            title: function (context) {
              const idx = context[0].dataIndex;
              if (subject === 'math') {
                return `${lessonTitles[idx]} (${context[0].label})`;
              }
              return context[0].label;
            }
          }
        }
      },
      animation: {
        duration: 1000,
        easing: 'easeOutQuart'
      }
    }
  };
}

// Initialize chart using ChartManager
const radarCanvasId = 'radarChart';
chartManager.createChart(radarCanvasId, createRadarChartConfig('math', 'Q1'));

// ========= EVENT LISTENERS =========
const subjectFilter = document.getElementById('pupilSubjectfilter');
const quarterFilter = document.getElementById('pupilquarterFilter');

if (subjectFilter) {
  subjectFilter.addEventListener('change', function () {
    const subject = this.value;
    const quarter = quarterFilter?.value || 'Q1';
    chartManager.createChart(radarCanvasId, createRadarChartConfig(subject, quarter));
  });
}

if (quarterFilter) {
  quarterFilter.addEventListener('change', function () {
    const quarter = this.value;
    const subject = subjectFilter?.value || 'all';
    chartManager.createChart(radarCanvasId, createRadarChartConfig(subject, quarter));
  });
}

const genderStats = window.dashboardData?.gender_stats ?? { male: 0, female: 0, prefer_not_to_say: 0 };


// ================================
// 2. Doughnut Chart - FIXED
// ================================
chartManager.createChart('genderChart', {
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
      legend: {
        position: 'bottom',
        labels: { font: { size: 12 } }
      },
      // ✅ ONLY tooltip — no datalabels!
      tooltip: {
        callbacks: {
          label: function(context) {
            const total = context.dataset.data.reduce((a, b) => a + b, 0);
            const percentage = Math.round((context.parsed / total) * 100);
            // Show: "Male: 180 (56%)"
            return `${context.label}: ${context.parsed} (${percentage}%)`;
          }
        }
      }
    }
  }
});

// ================================
// 3. LINE CHART
// ================================

let performanceChart = null;

// Use dashboard data instead of hardcoded data
const rawQuarterlyData = window.dashboardData.quarterlyProgress || {};

// Normalize subjects to lowercase keys for chart consistency
const quarterlyData = {};
['q1', 'q2', 'q3', 'q4'].forEach(q => {
  quarterlyData[q] = {};
  const subjects = rawQuarterlyData[q] || {};
  for (let key in subjects) {
    // Convert "Mathematics" to "math" for consistent chart keys
    const normalizedKey = key.toLowerCase() === 'mathematics' ? 'math' : key.toLowerCase();
    quarterlyData[q][normalizedKey] = subjects[key];
  }
});


// Professional Academic Color Palette
const subjectColors = {
  math: '#FFC107',
  english: '#2196F3',
  science: '#4CAF50',
  filipino: '#607D8B'
};

// Default labels (lessons)
const labels = ['Lesson 1', 'Lesson 2', 'Lesson 3', 'Lesson 4', 'Lesson 5', 'Lesson 6', 'Lesson 7', 'Lesson 8'];

// Function to create datasets from quarter data
function createDatasets(quarterData, subjectFilter = 'all') {
  const datasets = [];
  const subjectsToUse = subjectFilter === 'all' ? Object.keys(subjectColors) : [subjectFilter];

  subjectsToUse.forEach(subject => {
    const data = quarterData[subject] || []; // fallback empty array
    datasets.push({
      label: subject.charAt(0).toUpperCase() + subject.slice(1),
      data: data,
      borderColor: subjectColors[subject],
      backgroundColor: `rgba(${hexToRgb(subjectColors[subject])}, 0.1)`,
      borderWidth: 3,
      pointBackgroundColor: subjectColors[subject],
      pointRadius: 5,
      pointHoverRadius: 7,
      fill: true,
      tension: 0.3
    });
  });

  return datasets;
}

// Initial chart configuration using Q1 by default
const initialData = {
  labels: labels,
  datasets: createDatasets(quarterlyData.q1 || {})
};

// Create the line chart
const performanceCtx = document.getElementById('performanceChart')?.getContext('2d');
if (performanceCtx) {
  performanceChart = new Chart(performanceCtx, {
    type: 'line',
    data: initialData,
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: { position: 'top' },
        tooltip: { mode: 'index', intersect: false }
      },
      scales: {
        y: {
          beginAtZero: false,
          min: 0,
          max: 100,
          title: { display: true, text: 'Score (%)' },
          grid: { color: 'rgba(0, 0, 0, 0.1)' }
        },
        x: { grid: { display: false } }
      }
    }
  });

  // Event listeners for filters
  const subjectFilter = document.getElementById('line-chart-subject-filter');
  const quarterFilter = document.getElementById('line-chart-quarter-filter');

  if (subjectFilter && quarterFilter) {
    subjectFilter.addEventListener('change', updatePerformanceChart);
    quarterFilter.addEventListener('change', updatePerformanceChart);
  }
}

// Update function for filters
function updatePerformanceChart() {
  if (!performanceChart) return;

  const subject = document.getElementById('line-chart-subject-filter')?.value.toLowerCase() || 'all';
  const quarter = document.getElementById('line-chart-quarter-filter')?.value || 'q1';
  const quarterData = quarterlyData[quarter] || {};

  performanceChart.data.datasets = createDatasets(quarterData, subject);
  performanceChart.update();
}

// Helper function to convert hex to rgb
function hexToRgb(hex) {
  const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
  return result ? `${parseInt(result[1], 16)}, ${parseInt(result[2], 16)}, ${parseInt(result[3], 16)}` : '37, 99, 235';
}



// ================================
// 4. LESSON PROGRESS TREND CHART (DYNAMIC)
// ================================
document.addEventListener('DOMContentLoaded', function () {
  const canvas = document.getElementById('lessonProgressChart');
  if (!canvas) return;

  // Laravel-ready dynamic injection example (these can come from Controller)
  const lessonLabels = ['Lesson 1','Lesson 2','Lesson 3','Lesson 4','Lesson 5','Lesson 6','Lesson 7','Lesson 8'];
  const subjectColors = {
    English: '#2196F3',
    Filipino: '#607D8B',
    Mathematics: '#FFC107',
    Science: '#4CAF50'
  };

  // Mock data per subject per quarter
  const progressData = {
    1: {
      English: [75, 78, 80, 82, 85, 88, 90, 92],
      Filipino: [68, 70, 72, 75, 77, 79, 81, 83],
      Mathematics: [70, 73, 75, 78, 80, 83, 85, 88],
      Science: [65, 67, 68, 72, 76, 78, 80, 82]
    },
    2: {
      English: [80, 82, 84, 86, 88, 90, 92, 93],
      Filipino: [72, 74, 76, 78, 80, 82, 84, 85],
      Mathematics: [74, 77, 79, 82, 84, 86, 88, 90],
      Science: [70, 72, 74, 76, 78, 80, 82, 84]
    },
    3: {
      English: [82, 83, 85, 86, 88, 89, 91, 92],
      Filipino: [75, 76, 78, 80, 82, 84, 85, 87],
      Mathematics: [78, 80, 82, 84, 86, 87, 89, 91],
      Science: [72, 74, 75, 77, 79, 80, 82, 83]
    },
    4: {
      English: [84, 85, 86, 87, 89, 90, 91, 92],
      Filipino: [78, 79, 80, 82, 83, 84, 86, 88],
      Mathematics: [80, 82, 84, 85, 87, 89, 91, 93],
      Science: [74, 75, 76, 78, 80, 81, 82, 84]
    }
  };

  let currentQuarter = '1';
  let currentView = 'single';

  function getDatasets() {
    const datasets = [];
    if (currentView === 'single') {
      datasets.push({
        label: 'Mathematics',
        data: progressData[currentQuarter]['Mathematics'],
        borderColor: subjectColors['Mathematics'],
        backgroundColor: 'transparent',
        borderWidth: 4,
        pointBackgroundColor: '#fff',
        pointBorderColor: subjectColors['Mathematics'],
        pointRadius: 5,
        tension: 0.4
      });
    } else {
      Object.keys(subjectColors).forEach((subject) => {
        datasets.push({
          label: subject,
          data: progressData[currentQuarter][subject],
          borderColor: subjectColors[subject],
          backgroundColor: 'transparent',
          borderWidth: 2,
          pointBackgroundColor: '#fff',
          pointBorderColor: subjectColors[subject],
          pointRadius: 4,
          tension: 0.3
        });
      });
    }
    return datasets;
  }

  function createLessonProgressChart() {
    const config = {
      type: 'line',
      data: {
        labels: lessonLabels,
        datasets: getDatasets()
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          y: {
            beginAtZero: true,
            max: 100,
            ticks: { stepSize: 20 },
            grid: { color: '#e2e8f0' }
          },
          x: {
            grid: { color: '#f3f4f6' }
          }
        },
        plugins: {
          legend: { position: 'bottom', labels: { usePointStyle: true } },
          tooltip: { mode: 'index', intersect: false }
        }
      }
    };

    // ✅ Use ChartManager to create/replace the chart
    chartManager.createChart('lessonProgressChart', config);

    // Update insights text
    const insights = document.getElementById('chartInsights');
    if (insights) {
      if (currentView === 'single') {
        insights.textContent = `Mathematics shows steady improvement across lessons in Quarter ${currentQuarter} .`;
      } else {
        insights.textContent = `Viewing all subjects for Quarter ${currentQuarter} — Mathematics shows the highest consistency, while Filipino and Science steadily improve.`;
      }
    }
  }

  // Attach event listeners
  const subjectView = document.getElementById('subjectView');
  const quarterFilter = document.getElementById('quarterFilter');

  if (subjectView && quarterFilter) {
    subjectView.addEventListener('change', (e) => {
      currentView = e.target.value;
      createLessonProgressChart();
    });

    quarterFilter.addEventListener('change', (e) => {
      currentQuarter = e.target.value;
      createLessonProgressChart();
    });
  }

  // Initial render
  createLessonProgressChart();
});



// ================================
// 5. QUARTER COMPARISON BAR CHART
// ================================
document.addEventListener('DOMContentLoaded', function () {
  const canvas = document.getElementById('quarterComparisonChart');
  if (!canvas) return;

  const colors = {
    Mathematics: '#FFC107',
    Science: '#4CAF50',
    English: '#2196F3',
    Filipino: '#607D8B'
  };

  // ✅ FOR STANDALONE DEMO USE
  const subjectData = [
    { subject: 'Mathematics', quarters: [85, 88, 96, 92] },
    { subject: 'Science', quarters: [78, 81, 85, 87] },
    { subject: 'English', quarters: [80, 83, 86, 89] },
    { subject: 'Filipino', quarters: [75, 79, 82, 84] }
  ];

  let currentView = 'math';

  function getDatasets(view) {
    if (view === 'math') {
      const math = subjectData.find(s => s.subject === 'Mathematics');
      return [{
        label: 'Mathematics',
        data: math.quarters,
        backgroundColor: colors.Mathematics,
        borderRadius: 8,
        borderSkipped: false,
        barThickness: 50
      }];
    } else {
      return subjectData.map(sub => ({
        label: sub.subject,
        data: sub.quarters,
        backgroundColor: colors[sub.subject],
        borderRadius: 8,
        borderSkipped: false
      }));
    }
  }

  function createQuarterComparisonChart() {
    const config = {
      type: 'bar',
      data: {
        labels: ['Quarter 1', 'Quarter 2', 'Quarter 3', 'Quarter 4'],
        datasets: getDatasets(currentView)
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          y: {
            beginAtZero: true,
            max: 100,
            grid: { color: '#e2e8f0' },
            ticks: { stepSize: 25 }
          },
          x: { 
            grid: { display: false } 
          }
        },
        plugins: {
          legend: { 
            position: 'bottom', 
            labels: { usePointStyle: true } 
          },
          tooltip: { 
            mode: 'index', 
            intersect: false 
          }
        },
        animation: {
          duration: 800,
          easing: 'easeOutQuart'
        }
      }
    };

    // ✅ Use ChartManager for consistent lifecycle management
    chartManager.createChart('quarterComparisonChart', config);

    // Update insights
    const insights = document.getElementById('bar-chartInsights');
    if (insights) {
      if (currentView === 'math') {
        const math = subjectData.find(s => s.subject === 'Mathematics');
        const maxVal = Math.max(...math.quarters);
        const quarterIndex = math.quarters.indexOf(maxVal);
        const quarterName = ['Q1', 'Q2', 'Q3', 'Q4'][quarterIndex];
        insights.innerHTML = `${quarterName} shows the highest performance in <span>Mathematics</span>.`;
      } else {
        insights.innerHTML = `Mathematics leads across all quarters with consistent growth.`;
      }
    }
  }

  // Set up filter listener
  const subjectViewSelect = document.getElementById('bar-subjectView');
  if (subjectViewSelect) {
    subjectViewSelect.addEventListener('change', (e) => {
      currentView = e.target.value;
      createQuarterComparisonChart();
    });
  }

  // Initial render
  createQuarterComparisonChart();
});



// ================================
// 6. ENGAGEMENT VS MASTERY RADAR CHART
// ================================
document.addEventListener('DOMContentLoaded', function () {
  const canvas = document.getElementById('engagementMasteryChart');
  if (!canvas) return;

  const lessonLabels = ['L1','L2','L3','L4','L5','L6','L7','L8'];
  const lessonTitles = [
    'Fractions','Decimals','Percentages','Ratios',
    'Algebra','Geometry','Measurement','Statistics'
  ];

  // Data per Quarter (Mathematics only)
  const mathDataByQuarter = {
    1: { engagement: [82, 88, 90, 84, 77, 85, 83, 70], mastery: [78, 85, 92, 80, 79, 82, 79, 70] },
    2: { engagement: [80, 86, 89, 83, 76, 83, 84, 72], mastery: [77, 83, 90, 81, 80, 85, 80, 73] },
    3: { engagement: [84, 87, 91, 85, 79, 86, 86, 75], mastery: [79, 86, 93, 83, 81, 87, 82, 75] },
    4: { engagement: [86, 90, 93, 87, 82, 88, 88, 78], mastery: [81, 88, 95, 85, 84, 89, 84, 78] }
  };

  // All Subjects (Quarter-based pattern optional)
  const allSubjectsData = {
    labels: ['Mathematics','Science','English','Filipino'],
    engagement: [88, 82, 85, 70],
    mastery: [86, 78, 82, 68]
  };

  let currentRadarView = 'math';
  let currentQuarter = 1;

  function getLowestInsight(type) {
    if (type === 'math') {
      const data = mathDataByQuarter[currentQuarter];
      const maxIndex = data.mastery.indexOf(Math.max(...data.mastery));
      return `Q${currentQuarter}: Lesson ${lessonLabels[maxIndex].replace('L','')} (${lessonTitles[maxIndex]}) shows highest performance.`;
    } else {
      return `All subjects in Q${currentQuarter}: Mathematics leads across all quarters with consistent growth.`;
    }
  }

  function getRadarData(view) {
    if (view === 'math') {
      const data = mathDataByQuarter[currentQuarter];
      const maxIndex = data.mastery.indexOf(Math.max(...data.mastery));

      return {
        labels: lessonLabels,
        datasets: [
          {
            label: 'Mastery',
            data: data.engagement,
            fill: true,
            backgroundColor: 'rgba(59, 130, 246, 0.2)',
            borderColor: '#3B82F6',
            pointBackgroundColor: data.engagement.map((_, i) => (i === maxIndex ? '#2563EB' : '#3B82F6')),
            pointRadius: data.engagement.map((_, i) => (i === maxIndex ? 6 : 4)),
            tension: 0.3
          },
          {
            label: 'Engagement',
            data: data.mastery,
            fill: true,
            backgroundColor: 'rgba(16, 185, 128, 0.2)',
            borderColor: '#10B981',
            pointBackgroundColor: data.mastery.map((_, i) => (i === maxIndex ? '#059669' : '#10B981')),
            pointRadius: data.mastery.map((_, i) => (i === maxIndex ? 7 : 4)),
            tension: 0.3
          }
        ]
      };
    } else {
      return {
        labels: allSubjectsData.labels,
        datasets: [
          {
            label: 'Mastery',
            data: allSubjectsData.engagement,
            fill: true,
            backgroundColor: 'rgba(59, 130, 246, 0.2)',
            borderColor: '#3B82F6',
            pointBackgroundColor: '#3B82F6',
            tension: 0.3
          },
          {
            label: 'Engagement',
            data: allSubjectsData.mastery,
            fill: true,
            backgroundColor: 'rgba(16, 185, 128, 0.2)',
            borderColor: '#10B981',
            pointBackgroundColor: '#10B981',
            tension: 0.3
          }
        ]
      };
    }
  }

  function createEngagementMasteryChart() {
    const data = getRadarData(currentRadarView);
    const config = {
      type: 'radar',
      data: data,
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
            pointLabels: { color: '#334155', font: { size: 12 } }
          }
        },
        animation: {
          duration: 1000,
          easing: 'easeOutCubic'
        },
        plugins: {
          legend: { position: 'bottom' },
          tooltip: {
            callbacks: {
              title: function(context) {
                if (currentRadarView === 'math') {
                  const idx = context[0].dataIndex;
                  return `${lessonLabels[idx]}: ${lessonTitles[idx]}`;
                }
                return context[0].label;
              },
              label: function(context) {
                return `${context.dataset.label}: ${context.formattedValue}`;
              }
            }
          }
        }
      }
    };

    chartManager.createChart('engagementMasteryChart', config);

    const subtitle = document.getElementById('chartSubtitle');
    const insight = document.getElementById('radar-chartInsights');
    if (subtitle) {
      subtitle.textContent = currentRadarView === 'math'
        ? `Detailed lesson analysis for Mathematics (Quarter ${currentQuarter})`
        : `High-level overview across subjects`;
    }
    if (insight) {
      insight.textContent = getLowestInsight(currentRadarView);
    }
  }

  const radarViewFilter = document.getElementById('radar-subjectView');
  const radarQuarterFilter = document.getElementById('radar-quarterView');

  if (radarViewFilter) {
    radarViewFilter.addEventListener('change', function () {
      currentRadarView = this.value;
      createEngagementMasteryChart();
    });
  }

  if (radarQuarterFilter) {
    radarQuarterFilter.addEventListener('change', function () {
      currentQuarter = parseInt(this.value);
      createEngagementMasteryChart();
    });
  }

  createEngagementMasteryChart();
});