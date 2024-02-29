<div>
    <canvas id="taskChart"></canvas>
    @push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Ensure that 'ctx' is declared only once within this scope
        var dataTo = @json($totals);

        var labels = dataTo.map(function(item) {
            return item.area;
        });

        var values = dataTo.map(function(item) {
            return item.total_task;
        });

        var chartDataa = {
            labels: labels,
            datasets: [{
                data: values,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.7)',
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(255, 206, 86, 0.7)',
                    'rgba(75, 192, 192, 0.7)',
                    'rgba(153, 102, 255, 0.7)',
                ],
                borderWidth: 1
            }]
        };

        var options = {
            responsive: true,
            maintainAspectRatio: false,
        };

        // Use a different variable name here (e.g., chartCtx)
        var chartCtx = document.getElementById('taskChart').getContext('2d');

        var taskChart = new Chart(chartCtx, {
            type: 'pie',
            data: chartDataa,
            options: options
        });
    </script>
    
    @endpush
</div>
