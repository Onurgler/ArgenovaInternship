<?php
session_start();
include('../connection.php');
include "../includes/header.php";
?>

<div class="container mb-5 mt-5">
    <?php
    echo "Welcome user , " . $_SESSION['username'];
    ?>
    <div class="mt-1 mb-3">
        <button type="button" class="btn btn-info add-new" id="boto" name="boto">Add New User</button>
    </div>
    <div class="mb-4 col-2">
        <button type="button" onClick="parent.location='user-blog.php'" class="btn btn-primary buttonStyle" style="border-radius: 5px;">Go to User Blog</button>
    </div>


    <div id="denee" class="table-responsive">
        <?php
        $sql = "SELECT * FROM login ORDER BY ID DESC";
        $result = mysqli_query($connect, $sql);
        ?>
        <table id="user_data" class="table table striped table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Usernanme</td>
                    <td>Password</td>
                    <td style="width: 50px;">Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($result)) {
                    echo "
                
                <tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["username"] . "</td>
                    <td>" . $row["password"] . "</td>
                ";
                    echo '
                    <td>
                    <a class="add anew" title="Add" data-toggle="tooltip" ><i class="bi bi-person-plus-fill"></i></a>
                    <a class="edit anew" title="Edit" data-toggle="tooltip" id="' . $row["id"] . '"><i class="bi bi-pencil-fill"></i></a>
                    <a class="delete anew" title="Delete" data-toggle="tooltip" id="' . $row["id"] . '"><i class="bi bi-trash-fill"></i></a>
                    
                    </td>

                </tr>
                
                ';
                }
                ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        function myFunction() {
            //$_SESSION['username'] = $_SESSION['username'];
            aletr("AAAAAAA")
            header("location:panel/user-blog.php");
        }
        $(document).ready(function() {
            //$("#user_data").load("user-details.php");

            $('#user_data').DataTable();

            $('[data-toggle="tooltip"]').tooltip();
            $(".add-new").click(function() {
                $(this).attr("disabled", "disabled");
                var index = $("table tbody tr:last-child").index();
                var row = '<tr>' +
                    '<td>  </td>' +
                    '<td> <input type="text" class="form-control" name="newuser" id="newuser"> </td>' +
                    '<td> <input type="text" class="form-control" name="newpass" id="newpass"> </td>' +
                    '<td>' +
                    '<a class="add anew" title="Add" data-toggle="tooltip"><i class="bi bi-person-plus-fill"></i></a>' +
                    '<a class="edit anew" title="Edit" data-toggle="tooltip"><i class="bi bi-pencil-fill"></i></a>' +
                    '<a class="delete anew" title="Delete" data-toggle="tooltip"><i class="bi bi-trash-fill"></i></a>' +
                    '</td>' +
                    '</tr>';
                $("table").append(row);
                $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                $('[data-toggle="tooltip"]').tooltip();
                //$(this).prop("disabled",false);
            });

            $(document).on("click", ".add", function() {
                var empty = false;
                var input = $(this).parents("tr").find('input[type="text"]');
                input.each(function() {
                    if (!$(this).val()) {
                        $(this).addClass("error");
                        empty = true;
                    } else {
                        $(this).removeClass("error");
                    }
                });

                var newuser = $("#newuser").val();
                var newpass = $("#newpass").val();
                $.post("add.php", {
                    newuser: newuser,
                    newpass: newpass
                }, function(data) {
                    $("#displaymessage").html(data);
                });

                $(this).parents("tr").find(".error").first().focus();
                if (!empty) {
                    input.each(function() {
                        $(this).parent("td").html($(this).val());
                    });
                    $(this).parents("tr").find(".add, .edit").toggle();
                    $(".add-new").removeAttr("disabled");
                }
                //setTimeout(aa, 1000);
            });

            $(document).on("click", ".delete", function() {
                $(this).parents("tr").remove();
                $(".add-new").removeAttr("disabled");
                var id = $(this).attr("id");
                var string = id;
                $.post("delete.php", {
                    string: string
                }, function(data) {
                    $("#displaymessage").html(data);
                });
                //setTimeout(aa, 1000);
            });

            $(document).on("click", ".update", function() {
                var id = $(this).attr("id");
                var string = $("#id").val();
                var newuser = $("#newuser").val();
                var newpass = $("#newpass").val();
                $.post("update.php", {
                    string: string,
                    newuser: newuser,
                    newpass: newpass
                }, function(data) {
                    $("#displaymessage").html(data);
                });

                setTimeout(aa, 1000);
            });

            $(document).on("click", ".edit", function() {
                $(this).parents("tr").find("td:not(:last-child)").each(function(i) {
                    if (i == '0') {
                        var idname = 'id';
                        $(this).html('<input type="text" name="updaterec" id="' + idname + '" class="form-control" value="' + $(this).text() + '" readonly>');
                    } else if (i == '1') {
                        var idname = 'newuser';
                        $(this).html('<input type="text" name="updaterec" id="' + idname + '" class="form-control" value="' + $(this).text() + '">');
                    } else if (i == '2') {
                        var idname = 'newpass';
                        $(this).html('<input type="text" name="updaterec" id="' + idname + '" class="form-control" value="' + $(this).text() + '">');
                    } else {}

                });
                $(this).parents("tr").find(".add, .edit").toggle();
                $(".add-new").attr("disabled", "disabled");
                $(this).parents("tr").find(".add").removeClass("add anew").addClass("update anew");
            });



        });

        function aa() {
            //$("#denee").load(window.location.href + "#denee");
            window.location.reload();
        }
    </script>

</div>

<?php
include "../includes/footer.php";

?>