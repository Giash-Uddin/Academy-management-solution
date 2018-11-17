                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; Vincent Gabriel 2013</p>
            </footer>
        </div>
        <!--/.fluid-container-->
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="assets/scripts.js"></script>
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/DT_bootstrap.js"></script>
        <script type="text/javascript">
                                function menu_change(_url) {
                                    $.ajax({
                                        url: _url,
                                        type: 'get',
                                        success: function(data) {
                                            $('#content').html(data);
                                        },
                                        error: function() {
                                            $('#content').text('An error occurred');
                                        }
                                    });
                                }
        </script>
    </body>

</html>
