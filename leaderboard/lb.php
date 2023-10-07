<!DOCTYPE html>
<html>
<head>
    <title>Leaderboard</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Leaderboard</h1>
        <table class="table table-bordered" id="leaderboardTable">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Name</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data will be populated here -->
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function () {
            var leaderboardTable;

            function loadProjectsLeaderboard() {
                $.ajax({
                    url: 'get_projects_leaderboard.php',
                    method: 'GET',
                    success: function (data) {
                        if (leaderboardTable) {
                            leaderboardTable.destroy(); // Destroy previous DataTable instance
                        }
                        leaderboardTable = $('#leaderboardTable').DataTable({
                            data: data.data, // Use the 'data' key from the JSON response
                            columns: [
                                { data: 'Rank' },
                                { data: 'Name' },
                                { data: 'Score' }
                            ]
                        });
                    },
                });
            }

            // Initial state: Show projects leaderboard
            loadProjectsLeaderboard();
        });
    </script>
</body>
</html>
