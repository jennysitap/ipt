const ctx = document.getElementById('chartIngresos');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio', 'Agosto','Septiembre', 'Octubre','Noviembre', 'Diciembre'],
      datasets: [{
        label: 'Ganancias por mes',
        data: [1200, 1900, 3000, 5000, 2000, 3000, 1200, 2000, 1500, 10000, 1200, 1000],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
  const ctx2 = document.getElementById('chartCategorias');

  new Chart(ctx2, {
    type: 'pie',
    data: {
      labels: ['Comercial', 'Recreativo', 'Cultural', 'Educativo'],
      datasets: [{
        label: 'Proyectos por Categorias',
        data: [1000, 1000, 250, 250],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });