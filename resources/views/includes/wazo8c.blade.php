
<!DOCTYPE html>
<html>
<head>
    <title>CSS3 animated dropdown menu - demo</title>
    <meta name="viewport" content="width=device-width" />   
    <style>
    body{
        background: #eee url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAUAAAAFCAMAAAC6sdbXAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAAZQTFRF3d3d////riJKgAAAAAJ0Uk5T/wDltzBKAAAAFUlEQVR42mJgBAEGGMmAxAYCgAADAAGGABmnk/7aAAAAAElFTkSuQmCC);
        font: 13px 'trebuchet MS', Arial, Helvetica;
    }
    
    h2, p {
        text-align: center;
        color: #444;
        text-shadow: 0 1px 0 #fff;  
    }
    
    a {
        color: #2A679F;
    }
    
    /* You don't need the above styles, they are demo-specific ----------- */
    
    #menu, #menu ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }
    
    #menu {
        width: 960px;
        margin: 60px auto;
        border: 1px solid #222;
        background-color: #111;
        background-image: -moz-linear-gradient(#444, #111); 
        background-image: -webkit-gradient(linear, left top, left bottom, from(#444), to(#111));    
        background-image: -webkit-linear-gradient(#444, #111);  
        background-image: -o-linear-gradient(#444, #111);
        background-image: -ms-linear-gradient(#444, #111);
        background-image: linear-gradient(#444, #111);
        -moz-border-radius: 6px;
        -webkit-border-radius: 6px;
        border-radius: 6px;
        -moz-box-shadow: 0 1px 1px #777, 0 1px 0 #666 inset;
        -webkit-box-shadow: 0 1px 1px #777, 0 1px 0 #666 inset;
        box-shadow: 0 1px 1px #777, 0 1px 0 #666 inset;
    }
    
    #menu:before,
    #menu:after {
        content: "";
        display: table;
    }
    
    #menu:after {
        clear: both;
    }
    
    #menu {
        zoom:1;
    }
    
    #menu li {
        float: left;
        border-right: 1px solid #222;
        -moz-box-shadow: 1px 0 0 #444;
        -webkit-box-shadow: 1px 0 0 #444;
        box-shadow: 1px 0 0 #444;
        position: relative;
    }
    
    #menu a {
        float: left;
        padding: 12px 30px;
        color: #999;
        text-transform: uppercase;
        font: bold 12px Arial, Helvetica;
        text-decoration: none;
        text-shadow: 0 1px 0 #000;
    }
    
    #menu li:hover > a {
        color: #fafafa;
    }
    
    *html #menu li a:hover { /* IE6 only */
        color: #fafafa;
    }
    
    #menu ul {
        margin: 20px 0 0 0;
        _margin: 0; /*IE6 only*/
        opacity: 0;
        visibility: hidden;
        position: absolute;
        top: 38px;
        left: 0;
        z-index: 1;    
        background: #444;
        background: -moz-linear-gradient(#444, #111);
        background-image: -webkit-gradient(linear, left top, left bottom, from(#444), to(#111));
        background: -webkit-linear-gradient(#444, #111);    
        background: -o-linear-gradient(#444, #111); 
        background: -ms-linear-gradient(#444, #111);    
        background: linear-gradient(#444, #111);
        -moz-box-shadow: 0 -1px rgba(255,255,255,.3);
        -webkit-box-shadow: 0 -1px 0 rgba(255,255,255,.3);
        box-shadow: 0 -1px 0 rgba(255,255,255,.3);  
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        border-radius: 3px;
        -webkit-transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -ms-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;  
    }

    #menu li:hover > ul {
        opacity: 1;
        visibility: visible;
        margin: 0;
    }
    
    #menu ul ul {
        top: 0;
        left: 150px;
        margin: 0 0 0 20px;
        _margin: 0; /*IE6 only*/
        -moz-box-shadow: -1px 0 0 rgba(255,255,255,.3);
        -webkit-box-shadow: -1px 0 0 rgba(255,255,255,.3);
        box-shadow: -1px 0 0 rgba(255,255,255,.3);      
    }
    
    #menu ul li {
        float: none;
        display: block;
        border: 0;
        _line-height: 0; /*IE6 only*/
        -moz-box-shadow: 0 1px 0 #111, 0 2px 0 #666;
        -webkit-box-shadow: 0 1px 0 #111, 0 2px 0 #666;
        box-shadow: 0 1px 0 #111, 0 2px 0 #666;
    }
    
    #menu ul li:last-child {   
        -moz-box-shadow: none;
        -webkit-box-shadow: none;
        box-shadow: none;    
    }
    
    #menu ul a {    
        padding: 10px;
        width: 130px;
        _height: 10px; /*IE6 only*/
        display: block;
        white-space: nowrap;
        float: none;
        text-transform: none;
    }
    
    #menu ul a:hover {
        background-color: #0186ba;
        background-image: -moz-linear-gradient(#04acec,  #0186ba);  
        background-image: -webkit-gradient(linear, left top, left bottom, from(#04acec), to(#0186ba));
        background-image: -webkit-linear-gradient(#04acec, #0186ba);
        background-image: -o-linear-gradient(#04acec, #0186ba);
        background-image: -ms-linear-gradient(#04acec, #0186ba);
        background-image: linear-gradient(#04acec, #0186ba);
    }
    
    #menu ul li:first-child > a {
        -moz-border-radius: 3px 3px 0 0;
        -webkit-border-radius: 3px 3px 0 0;
        border-radius: 3px 3px 0 0;
    }
    
    #menu ul li:first-child > a:after {
        content: '';
        position: absolute;
        left: 40px;
        top: -6px;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-bottom: 6px solid #444;
    }
    
    #menu ul ul li:first-child a:after {
        left: -6px;
        top: 50%;
        margin-top: -6px;
        border-left: 0; 
        border-bottom: 6px solid transparent;
        border-top: 6px solid transparent;
        border-right: 6px solid #3b3b3b;
    }
    
    #menu ul li:first-child a:hover:after {
        border-bottom-color: #04acec; 
    }
    
    #menu ul ul li:first-child a:hover:after {
        border-right-color: #0299d3; 
        border-bottom-color: transparent;   
    }
    
    #menu ul li:last-child > a {
        -moz-border-radius: 0 0 3px 3px;
        -webkit-border-radius: 0 0 3px 3px;
        border-radius: 0 0 3px 3px;
    }
    
    /* Mobile */
    #menu-trigger {
        display: none;
    }

    @media screen and (max-width: 600px) {

        /* nav-wrap */
        #menu-wrap {
            position: relative;
        }

        #menu-wrap * {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        /* menu icon */
        #menu-trigger {
            display: block; /* show menu icon */
            height: 40px;
            line-height: 40px;
            cursor: pointer;        
            padding: 0 0 0 35px;
            border: 1px solid #222;
            color: #fafafa;
            font-weight: bold;
            background-color: #111;
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAPCAMAAADeWG8gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjE2QjAxNjRDOUNEOTExRTE4RTNFRkI1RDQ2MUYxOTQ3IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjE2QjAxNjREOUNEOTExRTE4RTNFRkI1RDQ2MUYxOTQ3Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MTZCMDE2NEE5Q0Q5MTFFMThFM0VGQjVENDYxRjE5NDciIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MTZCMDE2NEI5Q0Q5MTFFMThFM0VGQjVENDYxRjE5NDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz42AEtnAAAABlBMVEX///////9VfPVsAAAAAnRSTlP/AOW3MEoAAAAWSURBVHjaYmAgFzBiACKFho6NAAEGAD07AG1pn932AAAAAElFTkSuQmCC) no-repeat 10px center, -moz-linear-gradient(#444, #111); 
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAPCAMAAADeWG8gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjE2QjAxNjRDOUNEOTExRTE4RTNFRkI1RDQ2MUYxOTQ3IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjE2QjAxNjREOUNEOTExRTE4RTNFRkI1RDQ2MUYxOTQ3Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MTZCMDE2NEE5Q0Q5MTFFMThFM0VGQjVENDYxRjE5NDciIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MTZCMDE2NEI5Q0Q5MTFFMThFM0VGQjVENDYxRjE5NDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz42AEtnAAAABlBMVEX///////9VfPVsAAAAAnRSTlP/AOW3MEoAAAAWSURBVHjaYmAgFzBiACKFho6NAAEGAD07AG1pn932AAAAAElFTkSuQmCC) no-repeat 10px center, -webkit-linear-gradient(#444, #111); 
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAPCAMAAADeWG8gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjE2QjAxNjRDOUNEOTExRTE4RTNFRkI1RDQ2MUYxOTQ3IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjE2QjAxNjREOUNEOTExRTE4RTNFRkI1RDQ2MUYxOTQ3Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MTZCMDE2NEE5Q0Q5MTFFMThFM0VGQjVENDYxRjE5NDciIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MTZCMDE2NEI5Q0Q5MTFFMThFM0VGQjVENDYxRjE5NDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz42AEtnAAAABlBMVEX///////9VfPVsAAAAAnRSTlP/AOW3MEoAAAAWSURBVHjaYmAgFzBiACKFho6NAAEGAD07AG1pn932AAAAAElFTkSuQmCC) no-repeat 10px center, -o-linear-gradient(#444, #111);
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAPCAMAAADeWG8gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjE2QjAxNjRDOUNEOTExRTE4RTNFRkI1RDQ2MUYxOTQ3IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjE2QjAxNjREOUNEOTExRTE4RTNFRkI1RDQ2MUYxOTQ3Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MTZCMDE2NEE5Q0Q5MTFFMThFM0VGQjVENDYxRjE5NDciIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MTZCMDE2NEI5Q0Q5MTFFMThFM0VGQjVENDYxRjE5NDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz42AEtnAAAABlBMVEX///////9VfPVsAAAAAnRSTlP/AOW3MEoAAAAWSURBVHjaYmAgFzBiACKFho6NAAEGAD07AG1pn932AAAAAElFTkSuQmCC) no-repeat 10px center, -ms-linear-gradient(#444, #111);
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAPCAMAAADeWG8gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjE2QjAxNjRDOUNEOTExRTE4RTNFRkI1RDQ2MUYxOTQ3IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjE2QjAxNjREOUNEOTExRTE4RTNFRkI1RDQ2MUYxOTQ3Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MTZCMDE2NEE5Q0Q5MTFFMThFM0VGQjVENDYxRjE5NDciIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MTZCMDE2NEI5Q0Q5MTFFMThFM0VGQjVENDYxRjE5NDciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz42AEtnAAAABlBMVEX///////9VfPVsAAAAAnRSTlP/AOW3MEoAAAAWSURBVHjaYmAgFzBiACKFho6NAAEGAD07AG1pn932AAAAAElFTkSuQmCC) no-repeat 10px center, linear-gradient(#444, #111);
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            -moz-box-shadow: 0 1px 1px #777, 0 1px 0 #666 inset;
            -webkit-box-shadow: 0 1px 1px #777, 0 1px 0 #666 inset;
            box-shadow: 0 1px 1px #777, 0 1px 0 #666 inset;
        }
        
        /* main nav */
        #menu {
            margin: 0; padding: 10px;
            position: absolute;
            top: 40px;
            width: 100%;
            z-index: 1;
            background-color: #444;
            display: none;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;       
        }

        #menu:after {
            content: '';
            position: absolute;
            left: 25px;
            top: -8px;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-bottom: 8px solid #444;
        }   

        #menu ul {
            position: static;
            visibility: visible;
            opacity: 1;
            margin: 0;
            background: none;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;               
        }

        #menu ul ul {
            margin: 0 0 0 20px !important;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;       
        }

        #menu li {
            position: static;
            display: block;
            float: none;
            border: 0;
            margin: 5px;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;           
        }

        #menu ul li{
            margin-left: 20px;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;       
        }

        #menu a{
            display: block;
            float: none;
            padding: 0;
            color: #999;
        }

        #menu a:hover{
            color: #fafafa;
        }   

        #menu ul a{
            padding: 0;
            width: auto;        
        }

        #menu ul a:hover{
            background: none;   
        }

        #menu ul li:first-child a:after,
        #menu ul ul li:first-child a:after {
            border: 0;
        }       

    }

    @media screen and (min-width: 600px) {
        #menu {
            display: block !important;
        }
    }   

    /* iPad */
    .no-transition {
        -webkit-transition: none;
        -moz-transition: none;
        -ms-transition: none;
        -o-transition: none;
        transition: none;
        opacity: 1;
        visibility: visible;
        display: none;          
    }

    #menu li:hover > .no-transition {
        display: block;
    }
    </style>

<script type="text/javascript" src="http://gc.kis.scr.kaspersky-labs.com/1B74BD89-2A22-4B93-B451-1C9E1052A0EC/main.js" charset="UTF-8"></script></head>
<body>

<nav style="width: 100%;">    
    <ul id="menu">
        <li><a href="/">Home</a></li>

        <li>
            <a href="">Categories</a>
            <ul>
                <li>
                    <a href="">CSS</a>
                    <ul>
                        <li><a href="">Item 11</a></li>

                        <li><a href="">Item 12</a></li>
                        <li><a href="">Item 13</a></li>
                        <li><a href="">Item 14</a></li>
                    </ul>               
                </li>
                <li>
                    <a href="">Graphic design</a>

                    <ul>
                        <li><a href="">Item 21</a></li>
                        <li><a href="">Item 22</a></li>
                        <li><a href="">Item 23</a></li>
                        <li><a href="">Item 24</a></li>
                    </ul>               
                </li>

                <li>
                    <a href="">Development tools</a>
                    <ul>
                        <li><a href="">Item 31</a></li>
                        <li><a href="">Item 32</a></li>
                        <li><a href="">Item 33</a></li>
                        <li><a href="">Item 34</a></li>

                    </ul>               
                </li>
                <li>
                    <a href="">Web design</a>               
                    <ul>
                        <li><a href="">Item 41</a></li>
                        <li><a href="">Item 42</a></li>
                        <li><a href="">Item 43</a></li>

                        <li><a href="">Item 44</a></li>
                    </ul>   
                </li>
            </ul>
        </li>
        <li>
            <a href="">Work</a>
            <ul>

                <li>
                    <a href="">Work 1</a>
                    <ul>
                        <li>
                            <a href="">Work 11</a>      
                            <ul>
                                <li><a href="">Work 111</a></li>
                                <li><a href="">Work 112</a></li>

                                <li><a href="">Work 113</a></li>
                            </ul>                           
                        </li>
                        <li>
                            <a href="">Work 12</a>
                            <ul>
                                <li><a href="">Work 121</a></li>
                                <li><a href="">Work 122</a></li>

                                <li><a href="">Work 123</a></li>
                            </ul>                           
                        </li>
                        <li>
                            <a href="">Work 13</a>
                            <ul>
                                <li><a href="">Work 131</a></li>
                                <li><a href="">Work 132</a></li>

                                <li><a href="">Work 133</a></li>
                            </ul>                           
                        </li>
                    </ul>                   
                </li>
                <li>
                    <a href="">Work 2</a>
                    <ul>
                        <li>

                            <a href="">Work 21</a>
                            <ul>
                                <li><a href="">Work 211</a></li>
                                <li><a href="">Work 212</a></li>
                                <li><a href="">Work 213</a></li>
                            </ul>                           
                        </li>

                        <li>
                            <a href="">Work 22</a>
                            <ul>
                                <li><a href="">Work 221</a></li>
                                <li><a href="">Work 222</a></li>
                                <li><a href="">Work 223</a></li>
                            </ul>                           
                        </li>

                        <li>
                            <a href="">Work 23</a>
                            <ul>
                                <li><a href="">Work 231</a></li>
                                <li><a href="">Work 232</a></li>
                                <li><a href="">Work 233</a></li>
                            </ul>                           
                        </li>

                    </ul>                   
                </li>
                <li>
                    <a href="">Work 3</a>
                    <ul>
                        <li>
                            <a href="">Work 31</a>
                            <ul>

                                <li><a href="">Work 311</a></li>
                                <li><a href="">Work 312</a></li>
                                <li><a href="">Work 313</a></li>
                            </ul>                           
                        </li>
                        <li>
                            <a href="">Work 32</a>

                            <ul>
                                <li><a href="">Work 321</a></li>
                                <li><a href="">Work 322</a></li>
                                <li><a href="">Work 323</a></li>
                            </ul>                           
                        </li>
                        <li>
                            <a href="">Work 33</a>

                            <ul>
                                <li><a href="">Work 331</a></li>
                                <li><a href="">Work 332</a></li>
                                <li><a href="">Work 333</a></li>
                            </ul>                           
                        </li>
                    </ul>                   
                </li>

            </ul>       
        </li>
        <li><a href="">About</a></li>
        <li><a href="">Contact</a></li>
    </ul>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script>
    $(function() {
        if ($.browser.msie && $.browser.version.substr(0,1)<7)
        {
        $('li').has('ul').mouseover(function(){
            $(this).children('ul').css('visibility','visible');
            }).mouseout(function(){
            $(this).children('ul').css('visibility','hidden');
            })
        }

        /* Mobile */
        $('#menu-wrap').prepend('<div id="menu-trigger">Menu</div>');       
        $("#menu-trigger").on("click", function(){
            $("#menu").slideToggle();
        });

        // iPad
        var isiPad = navigator.userAgent.match(/iPad/i) != null;
        if (isiPad) $('#menu ul').addClass('no-transition');      
    });          
</script>

</body>
</html>