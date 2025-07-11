/* for desktop */
        .whatsapp_float {
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            left:40px;
            background-color: #25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
                font-size:30px;
            box-shadow: 2px 2px 3px #999;
                z-index:100;
        }

        .whatsapp-icon {
            margin-top:16px;
        }

        .whatsapp-icon:hover {
            color: var(--accent-color);
        }
        /* for mobile */
        @media screen and (max-width: 767px){
            .whatsapp-icon {
            margin-top:10px;
            }
            .whatsapp_float {
                width: 40px;
                height: 40px;
                bottom: 20px;
                left: 10px;
                font-size: 22px;
            }
        }

        @media (max-width: 1199px) {
            #menu-btn {
                display: flex !important;
            }
        }
        @media (min-width: 1200px) {
            #menu-btn {
                display: none !important;
            }
        }