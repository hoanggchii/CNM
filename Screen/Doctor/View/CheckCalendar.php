<script>
$(document).ready(function() {
    // var id_bs = $_SESSION['id'];
    var calendar = $('#calendar').fullCalendar({
        editable: true,
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
        },
        events: '../../Controller/LoadCalendar.php',
        selectable: true,
        selectHelper: true,

    });
});
</script>
</head>

<body>
    <div class="container">
        <?php 
        $id = $_SESSION['id']; 
        // echo $id;
        ?>
        <!-- hoàng chi -->
        <div id="calendar"></div>
    </div>
</body>

</html>