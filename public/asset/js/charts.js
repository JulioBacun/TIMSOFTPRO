var ctx = document.getElementById('chartContainer').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'bar',  // Jenis chart (batang)
        data: {
            labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],  // Label untuk setiap bar
            datasets: [{
                label: 'Emosi Positif',
                data: [12, 19, 3, 5, 2, 3, 8],  // Data untuk setiap hari
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
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