<nav class="admin-navbar">

    <div class="logo">
        <div class="logo-box">
            <img src="/Travel/assets/images/logo.jpeg" alt="Travel Cab Logo" class="logo-top">
        </div>
        <h2>Travel Cab</h2>
    </div>

    <!-- Hamburger Button -->
    <button class="menu-btn" id="menuBtn">&#9776;</button>

    <div class="navbar-right" id="navbarRight">

        <div class="navbar-search">
            <input
                type="text"
                placeholder="Search here...">
        </div>

        <div class="notification">
            🔔
            <span>3</span>
        </div>

        <div class="admin-user">

            <img
                src="/Travel/assets/images/user.png"
                alt="Admin">

            <div>
                <h4>Admin</h4>
                <p>Super Admin</p>
            </div>

        </div>

        <a href="/Travel/admin/logout.php" class="logout-btn">
            Logout
        </a>

    </div>

</nav>

<style>

/* ==========================
GLOBAL
========================== */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

html,
body{
    width:100%;
    overflow-x:hidden;
    font-family:Arial, sans-serif;
}


/* ==========================
ADMIN NAVBAR
========================== */

.admin-navbar{

    width:100%;
    height:80px;

    background:linear-gradient(135deg,#4db4ce,#2d7ecf,#4db4ce);

    display:flex;
    justify-content:space-between;
    align-items:center;

    padding:0 30px;

    position:sticky;
    top:0;
    left:0;

    z-index:999;

    box-shadow:0 5px 20px rgba(0,0,0,.08);

}



/* ==========================
HAMBURGER
========================== */

.menu-btn{

    display:none;

    width:42px;
    height:42px;

    border:none;
    border-radius:10px;

    background:#ffc107;

    color:#111;

    font-size:24px;

    font-weight:bold;

    cursor:pointer;

}



/* ==========================
LOGO
========================== */


.logo{

    display:flex;
    align-items:center;
    gap:12px;

}


.logo-box{

    width:65px;
    height:65px;

    display:flex;
    justify-content:center;
    align-items:center;

    overflow:hidden;

}


.logo-top{

    width:100%;
    height:100%;

    object-fit:contain;

}


.logo h2{

    font-size:28px;

    font-weight:700;

    color:#ffc107;

}



/* ==========================
RIGHT SECTION
========================== */


.navbar-right{

    display:flex;

    align-items:center;

    gap:20px;

}



/* SEARCH */

.navbar-search input{

    width:240px;

    padding:10px 18px;

    border:1px solid #ddd;

    border-radius:30px;

    outline:none;

}


.navbar-search input:focus{

    border-color:#ffc107;

}



/* NOTIFICATION */


.notification{

    position:relative;

    font-size:24px;

    cursor:pointer;

}


.notification span{

    position:absolute;

    top:-8px;

    right:-8px;


    width:20px;

    height:20px;

    border-radius:50%;


    background:#ffc107;

    color:#111;


    display:flex;

    justify-content:center;

    align-items:center;


    font-size:11px;

    font-weight:bold;

}



/* ADMIN USER */


.admin-user{

    display:flex;

    align-items:center;

    gap:10px;

}


.admin-user img{

    width:45px;

    height:45px;

    border-radius:50%;

    object-fit:cover;

}


.admin-user h4{

    margin:0;

    font-size:15px;

}


.admin-user p{

    margin:2px 0 0;

    font-size:12px;

    color:#eee;

}



/* LOGOUT */


.logout-btn{

    background:#ffc107;

    color:#111;

    padding:10px 22px;

    text-decoration:none;

    border-radius:30px;

    font-weight:700;

    transition:.3s;

}


.logout-btn:hover{

    background:#111827;

    color:#fff;

}





/* ==========================
TABLET
========================== */


@media(max-width:992px){


    .navbar-search input{

        width:180px;

    }


}






/* ==========================
MOBILE
========================== */

/* ==========================
MOBILE RESPONSIVE
========================== */

@media(max-width:768px){

    .admin-navbar{

        height:70px;
        padding:0 15px;

    }


    .logo-box{

        width:50px;
        height:50px;

    }


    .logo h2{

        font-size:22px;

    }


    .menu-btn{

        display:flex;

        justify-content:center;

        align-items:center;

        margin-left:auto;

    }



    .navbar-right{

        position:absolute;

        top:70px;

        left:0;

        width:100%;


        background:linear-gradient(135deg,#4db4ce,#2d7ecf,#4db4ce);


        display:flex;

        flex-direction:column;

        align-items:center;


        gap:18px;


        padding:20px;


        opacity:0;

        visibility:hidden;


        transform:translateY(-15px);


        transition:.3s ease;


    }



    .navbar-right.active{

        opacity:1;

        visibility:visible;

        transform:translateY(0);

    }




    /* SEARCH + NOTIFICATION */

    .navbar-search{

        width:75%;

    }


    .navbar-search input{

        width:100%;

        height:40px;

        padding:8px 15px;

        font-size:14px;

    }



    .notification{

        position:absolute;

        top:25px;

        right:35px;

        font-size:23px;

    }




    /* ADMIN USER */

    .admin-user{

        display:flex;

        align-items:center;

        justify-content:center;

        gap:12px;

        margin-top:10px;

    }



    .admin-user img{

        width:45px;

        height:45px;

    }



    .admin-user div{

        display:block;

    }


    .admin-user h4{

        font-size:15px;

    }


    .admin-user p{

        font-size:12px;

    }





    /* LOGOUT */

    .logout-btn{

        width:auto;

        min-width:140px;

        text-align:center;

        padding:9px 25px;

    }


}





/* SMALL MOBILE */

@media(max-width:480px){


    .logo h2{

        font-size:18px;

    }


    .menu-btn{

        width:38px;

        height:38px;

        font-size:20px;

    }



    .navbar-right{

        padding:18px 15px;

    }



    .navbar-search{

        width:70%;

    }



    .notification{

        right:25px;

    }



    .admin-user img{

        width:40px;

        height:40px;

    }



    .logout-btn{

        min-width:130px;

        font-size:13px;

    }


}
</style>
    <!-- Your whole page content -->


    <!-- Hamburger Menu Script -->
    <script>

    const menuBtn = document.getElementById("menuBtn");
    const navbarRight = document.getElementById("navbarRight");


    menuBtn.addEventListener("click", () => {

        navbarRight.classList.toggle("active");


        if(navbarRight.classList.contains("active")){

            menuBtn.innerHTML = "✕";

        }else{

            menuBtn.innerHTML = "☰";

        }

    });



    window.addEventListener("resize", () => {

        if(window.innerWidth > 768){

            navbarRight.classList.remove("active");
            menuBtn.innerHTML = "☰";

        }

    });


    </script>