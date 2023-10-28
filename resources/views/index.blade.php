<!DOCTYPE html>
<html>
<head>
    <title>Search</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<body style="margin: 0; padding: 20px;">
    <div style="background: #E5E5E5; padding: 20px; width: 100%; float: left; box-sizing: border-box;">
        <h3 style="margin: 0 0 20px 1%;">Search</h3>
        <input id="myInput" type="text" placeholder="Search name/ designation/ department" style="width: 98%;margin: 0 1% 10px 1%;border: none;padding: 15px;font-size: 14px;color: #000; box-sizing: border-box;">
        <div id="myTable">
         @foreach( $users as $user )
        <div  style="background: #fff; margin: 0 20px 20px 0; width: 48%; float: left; padding: 15px; box-sizing: border-box; margin: 1%;">
            <h4 style="margin: 0; font-size: 22px;">{{$user->username}}</h4>
            <p>
                <b style="font-size: 18px;">{{$user->departmentname}}</b><br>
               {{$user->designationname}}
            </p>
        </div>
          @endforeach
      </div>
       <!--  <div style="background: #fff; width: 48%; float: left; padding: 15px; box-sizing: border-box; margin: 1%;">
            <h4 style="margin: 0; font-size: 22px;">Tommy Mark</h4>
            <p>
                <b style="font-size: 18px;">Mobile Application Dev.</b><br>
                Application development
            </p>
        </div>
        <div style="background: #fff; width: 48%; float: left; padding: 15px; box-sizing: border-box; margin: 1%;">
            <h4 style="margin: 0; font-size: 22px;">Jhon Due</h4>
            <p>
                <b style="font-size: 18px;">Marketing Manger</b><br>
                Sales and marketing
            </p>
        </div>
        <div style="background: #fff; width: 48%; float: left; padding: 15px; box-sizing: border-box; margin: 1%;">
            <h4 style="margin: 0; font-size: 22px;">Tommy Mark</h4>
            <p>
                <b style="font-size: 18px;">Mobile Application Dev.</b><br>
                Application development
            </p>
        </div> -->
    </div>
</body>
</html>
