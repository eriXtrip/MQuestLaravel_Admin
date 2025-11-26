document.addEventListener('DOMContentLoaded', () => {

  // MQUESTADMINLARAVEL/public/assets/js/allchart.js
  // ================================
  // Chart Manager (Reusable & Safe)
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

    updateChart(canvasId, updaterFn) {
      const chart = this.charts[canvasId];
      if (!chart) return;
      updaterFn(chart);
      chart.update();
    }

    destroyAll() {
      Object.values(this.charts).forEach(chart => chart.destroy());
      this.charts = {};
    }
  }

  const chartManager = new ChartManager();


  // ================================
  // GENDER RATIO DOUGHNUT CHART
  // ================================
  const genderData = window.dashboardData?.gender || { male: 0, female: 0, others: 0 };
  
  chartManager.createChart('genderDoughnutChart', {
    type: 'doughnut',
    data: {
      labels: ['Male', 'Female', 'Others'],
      datasets: [{
        data: [genderData.male, genderData.female, genderData.others],
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
        tooltip: {
          callbacks: {
            label: function(context) {
              const total = context.dataset.data.reduce((a, b) => a + b, 0);
              const percentage = Math.round((context.parsed / total) * 100);
              return `${context.label}: ${context.parsed} (${percentage}%)`;
            }
          }
        }
      }
    }
  });


  // ================================
  // CLASS PERFORMANCE LINE CHART
  // ================================

  // Get raw data
  const raw = window.subjectPerformance || {};

  // Define subjects & colors
  const subjectColors = {
    math: '#FFC107',
    english: '#2196F3',
    science: '#4CAF50',
    filipino: '#607D8B'
  };

  const totalLessons = 8; // maximum lessons per quarter (from your data)

  // Zero-fill quarterly data
  const quarterlyData = { q1: {}, q2: {}, q3: {}, q4: {} };

  Object.keys(subjectColors).forEach(subject => {
    for (let q = 1; q <= 4; q++) {
      const quarterKey = `q${q}`;

      // Map lowercase keys to raw object keys
      let rawKey = subject;
      if (subject === 'math') rawKey = 'Mathematics';
      if (subject === 'english') rawKey = 'English';
      if (subject === 'science') rawKey = 'Science';
      if (subject === 'filipino') rawKey = 'Filipino';

      const lessons = (raw[rawKey] && raw[rawKey][q]) || [];

      // Use the actual number of lessons in this quarter
      const progressArray = lessons.map(l => Number(l.avg_progress || 0));

      quarterlyData[quarterKey][subject] = progressArray;
    }
  });

  console.log("🔥 Final quarterlyData for Charts:", quarterlyData);
  console.log("🔥 Raw subjectPerformance data:", raw);

  // const quarterlyData = {
  //   q1: {
  //     math: [75, 78, 82, 85, 88, 90, 92, 95],
  //     science: [80, 82, 85, 87, 84, 88, 86, 92],
  //     english: [85, 83, 86, 89, 87, 90, 88, 91],
  //     filipino: [78, 80, 83, 85, 87, 89, 90, 93]
  //   },
  //   q2: {
  //     math: [78, 80, 85, 88, 90, 92, 94, 96],
  //     science: [82, 84, 87, 89, 86, 90, 88, 94],
  //     english: [87, 85, 88, 91, 89, 92, 90, 93],
  //     filipino: [80, 82, 85, 87, 89, 91, 92, 95]
  //   },
  //   q3: {
  //     math: [80, 83, 87, 90, 92, 94, 95, 97],
  //     science: [84, 86, 89, 91, 88, 92, 90, 95],
  //     english: [89, 87, 90, 93, 91, 94, 92, 95],
  //     filipino: [82, 84, 87, 89, 91, 93, 94, 96]
  //   },
  //   q4: {
  //     math: [82, 85, 89, 92, 94, 96, 97, 98],
  //     science: [86, 88, 91, 93, 90, 94, 92, 96],
  //     english: [91, 89, 92, 95, 93, 96, 94, 97],
  //     filipino: [84, 86, 89, 91, 93, 95, 96, 97]
  //   }
  // };

  // const initialData = {
  //   labels: ['Lesson 1', 'Lesson 2', 'Lesson 3', 'Lesson 4', 'Lesson 5', 'Lesson 6', 'Lesson 7', 'Lesson 8'],
  //   datasets: [
  //     {
  //       label: 'Mathematics',
  //       data: quarterlyData.q1.math,
  //       borderColor: subjectColors.math,
  //       backgroundColor: 'rgba(255, 193, 7, 0.1)',
  //       borderWidth: 3,
  //       fill: true,
  //       tension: 0.3
  //     },
  //     {
  //       label: 'English',
  //       data: quarterlyData.q1.english,
  //       borderColor: subjectColors.english,
  //       backgroundColor: 'rgba(33, 150, 243, 0.1)',
  //       borderWidth: 3,
  //       fill: true,
  //       tension: 0.3
  //     },
  //     {
  //       label: 'Science',
  //       data: quarterlyData.q1.science,
  //       borderColor: subjectColors.science,
  //       backgroundColor: 'rgba(76, 175, 80, 0.1)',
  //       borderWidth: 3,
  //       fill: true,
  //       tension: 0.3
  //     },
  //     {
  //       label: 'Filipino',
  //       data: quarterlyData.q1.filipino,
  //       borderColor: subjectColors.filipino,
  //       backgroundColor: 'rgba(96, 125, 139, 0.1)',
  //       borderWidth: 3,
  //       fill: true,
  //       tension: 0.3
  //     }
  //   ]
  // };

  // const performanceCtx = document.getElementById('performanceChart')?.getContext('2d');
  // let performanceChart = null;

  // if (performanceCtx) {
  //   performanceChart = new Chart(performanceCtx, {
  //     type: 'line',
  //     data: initialData,
  //     options: {
  //       responsive: true,
  //       maintainAspectRatio: false,
  //       plugins: {
  //         legend: { position: 'bottom' },
  //         tooltip: { mode: 'index', intersect: false }
  //       },
  //       scales: {
  //         y: {
  //           min: 70,
  //           max: 100,
  //           beginAtZero: false
  //         }
  //       }
  //     }
  //   });
  // }

  // function updatePerformanceChart() {
  //   if (!performanceChart) return;
  //   const subject = document.getElementById('line-chart-subject-filter')?.value || 'all';
  //   const quarter = document.getElementById('line-chart-quarter-filter')?.value || 'q1';
  //   const quarterData = quarterlyData[quarter] || quarterlyData.q1;

  //   if (subject === 'all') {
  //     performanceChart.data.datasets = Object.keys(quarterData).map(sub => ({
  //       label: sub.charAt(0).toUpperCase() + sub.slice(1),
  //       data: quarterData[sub],
  //       borderColor: subjectColors[sub],
  //       backgroundColor: `rgba(${hexToRgb(subjectColors[sub])}, 0.1)`,
  //       borderWidth: 3,
  //       fill: true,
  //       tension: 0.3
  //     }));
  //   } else {
  //     performanceChart.data.datasets = [{
  //       label: subject.charAt(0).toUpperCase() + subject.slice(1),
  //       data: quarterData[subject],
  //       borderColor: subjectColors[subject],
  //       backgroundColor: `rgba(${hexToRgb(subjectColors[subject])}, 0.1)`,
  //       borderWidth: 3,
  //       fill: true,
  //       tension: 0.3
  //     }];
  //   }
  //   performanceChart.update();
  // }

  // function hexToRgb(hex) {
  //   const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
  //   return result ? `${parseInt(result[1], 16)}, ${parseInt(result[2], 16)}, ${parseInt(result[3], 16)}` : '0,0,0';
  // }

  // const subjectFilterEl = document.getElementById('line-chart-subject-filter');
  // const quarterFilterEl = document.getElementById('line-chart-quarter-filter');
  // if (subjectFilterEl) subjectFilterEl.addEventListener('change', updatePerformanceChart);
  // if (quarterFilterEl) quarterFilterEl.addEventListener('change', updatePerformanceChart);

  // Chart setup (use the same initialData as before)
  const initialData = {
    labels: Array.from({ length: totalLessons }, (_, i) => `Lesson ${i + 1}`),
    datasets: Object.keys(subjectColors).map(sub => ({
      label: sub.charAt(0).toUpperCase() + sub.slice(1),
      data: quarterlyData.q1[sub],
      borderColor: subjectColors[sub],
      backgroundColor: `rgba(${hexToRgb(subjectColors[sub])}, 0.1)`,
      borderWidth: 3,
      fill: true,
      tension: 0.3
    }))
  };

  // Chart.js instance
  const performanceCtx = document.getElementById('performanceChart')?.getContext('2d');
  let performanceChart = null;
  if (performanceCtx) {
    performanceChart = new Chart(performanceCtx, {
      type: 'line',
      data: initialData,
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { position: 'bottom' }, tooltip: { mode: 'index', intersect: false } },
        scales: { y: { min: 0, max: 100, beginAtZero: true } }
      }
    });
  }

  // Update function (keeps the same)
  function updatePerformanceChart() {
    if (!performanceChart) return;
    const subject = document.getElementById('line-chart-subject-filter')?.value || 'all';
    const quarter = document.getElementById('line-chart-quarter-filter')?.value || 'q1';
    const quarterData = quarterlyData[quarter] || quarterlyData.q1;

    if (subject === 'all') {
      performanceChart.data.datasets = Object.keys(quarterData).map(sub => ({
        label: sub.charAt(0).toUpperCase() + sub.slice(1),
        data: quarterData[sub],
        borderColor: subjectColors[sub],
        backgroundColor: `rgba(${hexToRgb(subjectColors[sub])}, 0.1)`,
        borderWidth: 3,
        fill: true,
        tension: 0.3
      }));
    } else {
      performanceChart.data.datasets = [{
        label: subject.charAt(0).toUpperCase() + subject.slice(1),
        data: quarterData[subject],
        borderColor: subjectColors[subject],
        backgroundColor: `rgba(${hexToRgb(subjectColors[subject])}, 0.1)`,
        borderWidth: 3,
        fill: true,
        tension: 0.3
      }];
    }

    performanceChart.update();
  }

  function hexToRgb(hex) {
    const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
    return result ? `${parseInt(result[1], 16)}, ${parseInt(result[2], 16)}, ${parseInt(result[3], 16)}` : '0,0,0';
  }

  document.getElementById('line-chart-subject-filter')?.addEventListener('change', updatePerformanceChart);
  document.getElementById('line-chart-quarter-filter')?.addEventListener('change', updatePerformanceChart);


  // ================================
  // LESSON COMPLETION BAR CHART
  // ================================
  function getAdminCompletionData() {
    const qFilter = document.getElementById('completionFilterQuarter')?.value || '';
    const sFilter = document.getElementById('completionFilterSub')?.value || '';

    const raw = window.subjectPerformance || {};
    const allQuarters = ['1', '2', '3', '4']; // quarters as numbers in strings

    const subjectColors = {
      Mathematics: '#FFC107',
      English: '#2196F3',
      Science: '#4CAF50',
      Filipino: '#607D8B'
    };

    const subjectMap = {
      Mathematics: 'math',
      English: 'english',
      Science: 'science',
      Filipino: 'filipino'
    };

    const reverseSubjectMap = {
      math: 'Mathematics',
      english: 'English',
      science: 'Science',
      filipino: 'Filipino'
    };

    const allSubjects = Object.keys(subjectMap).map(s => subjectMap[s]);

    // Populate dropdown
    const subjSelect = document.getElementById('completionFilterSub');
    if (subjSelect && subjSelect.options.length <= 1) {
      subjSelect.innerHTML = '<option value="">All Subjects</option>';
      allSubjects.forEach(s => {
        const opt = document.createElement('option');
        opt.value = s;
        opt.textContent = reverseSubjectMap[s];
        subjSelect.appendChild(opt);
      });
    }

    // Prepare quarters for chart
    const quarters = qFilter ? [qFilter] : allQuarters;
    const filteredSubjects = sFilter ? [sFilter] : allSubjects;

    const datasets = filteredSubjects.map(subject => {
      const data = quarters.map(q => {
        const rawSubject = reverseSubjectMap[subject];
        const lessons = (raw[rawSubject] && raw[rawSubject][q]) || [];
        if (lessons.length === 0) return 0;

        const avg = lessons.map(l => Number(l.avg_progress || 0));
        return Math.round(avg.reduce((a, b) => a + b, 0) / avg.length);
      });

      return {
        label: reverseSubjectMap[subject],
        data,
        backgroundColor: subjectColors[reverseSubjectMap[subject]] || '#888',
        borderColor: '#fff',
        borderWidth: 1.2,
        borderRadius: 4,
        borderSkipped: false
      };
    });

    const labels = quarters.map(q => 'Quarter ' + q);
    return { labels, datasets };
  }

  const ctx = document.getElementById('adminCompletionChart');
  if (ctx) {
    const adminCompletionChart = new Chart(ctx, {
      type: 'bar',
      data: getAdminCompletionData(),
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          title: {
            display: true,
            text: 'Completion Rate Overview',
            color: '#131150',
            font: { size: 12, weight: '600' }
          },
          legend: {
            position: 'bottom',
            labels: { font: { size: 12 } }
          },
          tooltip: {
            callbacks: {
              label: ctx => `${ctx.dataset.label}: ${ctx.parsed.y}%`
            }
          }
        },
        scales: {
          y: {
            beginAtZero: true,
            max: 100,
            ticks: { callback: v => v + '%', font: { size: 11 } },
            title: { display: true, text: 'Completion Rate (%)', font: { size: 10 } }
          },
          x: {
            ticks: { font: { size: 11 } },
            title: { display: true, text: 'Quarters / Subjects / Lessons', font: { size: 10 } }
          }
        }
      }
    });

    // ===== FILTER LISTENERS (WITH NULL CHECKS) =====
    const quarterFilter = document.getElementById('completionFilterQuarter');
    const subjectFilter = document.getElementById('completionFilterSub');

    if (quarterFilter) {
      quarterFilter.addEventListener('change', () => {
        const newData = getAdminCompletionData();
        adminCompletionChart.data = newData;
        adminCompletionChart.update();
      });
    }

    if (subjectFilter) {
      subjectFilter.addEventListener('change', () => {
        const newData = getAdminCompletionData();
        adminCompletionChart.data = newData;
        adminCompletionChart.update();
      });
    }
  }


  // ================================
  // ANALYTICS PERFORMANCE CHART
  // ================================
  const canvasId = 'analyticsPerformanceChart';
  const perfChart = chartManager.createChart(canvasId, {
    type: 'line',
    data: {
      labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
      datasets: [
        {
          label: 'Lessons Created',
          data: [8, 12, 15, 10],
          borderColor: '#4361ee',
          backgroundColor: 'rgba(67, 97, 238, 0.1)',
          tension: 0.3,
          fill: true
        },
        {
          label: 'Student Engagement',
          data: [75, 82, 88, 85],
          borderColor: '#f72585',
          backgroundColor: 'rgba(247, 37, 133, 0.1)',
          tension: 0.3,
          fill: true
        },
        {
          label: 'Avg. Rating',
          data: [4.3, 4.5, 4.7, 4.6],
          borderColor: '#4ade80',
          backgroundColor: 'rgba(74, 222, 128, 0.1)',
          tension: 0.3,
          fill: true
        }
      ]
    },
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
          ticks: {
            callback: value => (value <= 5 ? `${value} ★` : value)
          }
        }
      }
    }
  });

  const periodSelect = document.getElementById('analyticsPeriod');
  if (periodSelect && perfChart) {
    periodSelect.addEventListener('change', () => {
      const chart = chartManager.charts[canvasId];
      if (!chart) return;

      const period = periodSelect.value;
      let labels, lessonsData, engagementData, ratingData;

      if (period === '7') {
        labels = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
        lessonsData = [2, 3, 1, 2, 3, 0, 1];
        engagementData = [78, 81, 76, 85, 88, 65, 70];
        ratingData = [4.4, 4.6, 4.3, 4.7, 4.8, 4.2, 4.5];
      } else if (period === '30') {
        labels = ['Week 1', 'Week 2', 'Week 3', 'Week 4'];
        lessonsData = [8, 12, 15, 10];
        engagementData = [75, 82, 88, 85];
        ratingData = [4.3, 4.5, 4.7, 4.6];
      } else if (period === '90') {
        labels = ['Month 1', 'Month 2', 'Month 3'];
        lessonsData = [25, 30, 28];
        engagementData = [72, 80, 85];
        ratingData = [4.2, 4.5, 4.6];
      } else {
        labels = ['Q1', 'Q2', 'Q3', 'Q4'];
        lessonsData = [45, 52, 48, 40];
        engagementData = [68, 75, 82, 78];
        ratingData = [4.1, 4.4, 4.6, 4.5];
      }

      chart.data.labels = labels;
      chart.data.datasets[0].data = lessonsData;
      chart.data.datasets[1].data = engagementData;
      chart.data.datasets[2].data = ratingData;
      chart.update();
    });
  }

});