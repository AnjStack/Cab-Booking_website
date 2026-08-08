<!-- SIDEBAR -->
 <button class="sidebar-btn" id="sidebarBtn">
    ☰
</button>

<aside class="sidebar" id="sidebar">

    <div class="sidebar-logo">
        <h2>6G Travel</h2>
        <p>Admin Panel</p>
    </div>

    <ul class="sidebar-menu">

        <li>
            <a href="/Travel/admin/dashboard.php">
                📊 Dashboard
            </a>
        </li>

        <li>
            <a href="/Travel/admin/users/list.php">
                👥 Users
            </a>
        </li>

        <li>
            <a href="/Travel/admin/drivers/list.php">
                🚗 Drivers
            </a>
        </li>

        <li>
            <a href="/Travel/admin/cab-types/list.php">
                🚕 Cab Types
            </a>
        </li>

        <li>
            <a href="/Travel/admin/bookings/list.php">
                📋 Bookings
            </a>
        </li>

    </ul>

</aside>

<style>

/* ==========================
SIDEBAR BUTTON
========================== */

.sidebar-btn{

    display:none;

    position:fixed;

    top:85px;
    left:15px;

    width:42px;
    height:42px;

    border:none;

    border-radius:10px;

    background:#ffc107;

    color:#111;

    font-size:22px;

    cursor:pointer;

    z-index:1201;

}



/* ==========================
SIDEBAR
========================== */


.sidebar{

    position:fixed;

    top:80px;

    left:0;

    width:260px;

    height:calc(100vh - 80px);

    background:#111827;

    color:white;

    padding:30px 20px;

    overflow-y:auto;

    transition:transform .35s ease;

    z-index:1200;

    box-shadow:5px 0 20px rgba(0,0,0,.25);

}





/* LOGO */

.sidebar-logo{

    text-align:center;

    padding-bottom:25px;

    border-bottom:1px solid rgba(255,255,255,.15);

}



.sidebar-logo h2{

    color:#ffc107;

    font-size:28px;

}



.sidebar-logo p{

    color:#bbb;

    margin-top:5px;

    font-size:14px;

}





/* MENU */

.sidebar-menu{

    list-style:none;

    padding:0;

    margin-top:30px;

}



.sidebar-menu li{

    margin-bottom:12px;

}



.sidebar-menu a{

    display:flex;

    align-items:center;

    gap:12px;

    padding:14px 18px;

    border-radius:12px;

    text-decoration:none;

    color:#ddd;

    font-size:15px;

    font-weight:600;

    transition:.3s;

}



.sidebar-menu a:hover,
.sidebar-menu a.active{

    background:#ffc107;

    color:#111827;

    transform:translateX(5px);

}





/* OVERLAY */


.sidebar-overlay{

    position:fixed;

    top:0;

    left:0;

    width:100%;

    height:100%;

    background:rgba(0,0,0,.45);

    opacity:0;

    visibility:hidden;

    transition:.3s ease;

    z-index:1100;

}


.sidebar-overlay.active{

    opacity:1;

    visibility:visible;

}





/* ==========================
MOBILE
========================== */


@media(max-width:768px){


.sidebar-btn{

    display:flex;

    align-items:center;

    justify-content:center;

}



.sidebar{

    top:70px;

    height:calc(100vh - 70px);

    width:260px;

    transform:translateX(-100%);

}



.sidebar.active{

    transform:translateX(0);

}



}





/* SMALL MOBILE */


@media(max-width:480px){


.sidebar{

    width:240px;

}



.sidebar-logo h2{

    font-size:24px;

}



.sidebar-menu a{

    padding:13px 15px;

    font-size:14px;

}



}

</style>

<script>

const sidebarBtn = document.getElementById("sidebarBtn");

const sidebar = document.getElementById("sidebar");


const sidebarOverlay = document.createElement("div");

sidebarOverlay.className="sidebar-overlay";

document.body.appendChild(sidebarOverlay);



if(sidebarBtn && sidebar){


    sidebarBtn.addEventListener("click",function(){


        sidebar.classList.toggle("active");

        sidebarOverlay.classList.toggle("active");


    });



    sidebarOverlay.addEventListener("click",function(){


        sidebar.classList.remove("active");

        sidebarOverlay.classList.remove("active");


    });



    window.addEventListener("resize",function(){


        if(window.innerWidth > 768){


            sidebar.classList.remove("active");

            sidebarOverlay.classList.remove("active");


        }


    });


}


</script>
