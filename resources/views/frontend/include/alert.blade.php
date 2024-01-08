<style>
    .alert {
padding: 20px;
background-color: #f44336;
color: white;
opacity: 1;
transition: opacity 0.6s;
margin-bottom: 15px;
}

.alert.success {background-color: #04AA6D;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtnings {
margin-left: 15px;
color: white;
font-weight: bold;
float: right;
font-size: 22px;
line-height: 20px;
cursor: pointer;
transition: 0.3s;
}

.closebtnings:hover {
color: #931621;
}
.main-message-div {
padding: 20px 40px;
position: fixed;
z-index: 9999;
right: 0;
bottom: 0;
overflow: hidden; 
}
.message-div{
width: 28rem;
position: relative;
}
</style>
<div class="main-message-div">
    @if (session('success'))
        <div class="message-div">
            <div class="alert success">
                <a class="closebtnings">&times;</a>  
                <strong>Success!</strong> {{ session('success') }}
            </div>
        </div>  
    @endif

    @if (session('warning'))
        <div class="message-div">
            <div class="alert warning">
                <a class="closebtnings">&times;</a>  
                <strong>Warning!</strong> {{ session('warning') }}
            </div>
        </div>    
    @endif

    @if ($errors->any())
        <div class="message-div">
            <div class="alert danger">
                <a href=#" class="closebtnings">&times;</a>  
                <strong>Danger!</strong> {{ session('danger') }}
            </div>
        </div> 
    @endif
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
     var closeButtons = document.querySelectorAll(".closebtnings");
     closeButtons.forEach(function(button) {
         button.addEventListener("click", function(event) {
             event.preventDefault();
             var div = this.closest('.message-div');
             div.style.opacity = "0";
             setTimeout(function() {
                 div.style.display = "none";
             }, 600);
         });
     });

 
         var successAlerts = document.querySelectorAll(".message-div");
         successAlerts.forEach(function(alert) {
             setTimeout(function() {
                 alert.style.opacity = "0";
                 setTimeout(function() {
                     alert.style.display = "none";
                 }, 600);
             }, 10000); // 10 seconds (10000 milliseconds)
         });
     });
 </script>