<div>
    <canvas id="myChart"></canvas>
    @push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>

// Assuming you have the data from your query result
const chartData = [
    { vendor: 'AI', area: 'area 3', task_count: 6 },
    { vendor: 'BA', area: 'area 1', task_count: 3 },
    { vendor: 'BO', area: 'area 1', task_count: 4 },
    { vendor: 'NE', area: 'area 1', task_count: 1 },
    { vendor: 'NE', area: 'area 2', task_count: 3 },
    { vendor: 'O2', area: 'area 3', task_count: 1 },
    { vendor: 'O2', area: 'area 4', task_count: 2 }
];

// Extract labels and data from the query result
const uniqueVendors = [...new Set(chartData.map(item => item.vendor))];
const data = uniqueVendors.map(vendor => {
    const vendorData = chartData.find(item => item.vendor === vendor);
    return vendorData ? vendorData.task_count : 0;
});

// Get the canvas element
const ctx = document.getElementById('myChart').getContext('2d');

// Create a new Chart instance
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: uniqueVendors,
        datasets: [
            {
                label: 'Task Count',
                data: data,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }
        ]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});




    </script>
    
    @endpush
</div>
