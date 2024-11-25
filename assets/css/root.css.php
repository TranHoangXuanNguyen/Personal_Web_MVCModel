<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
a{
    text-decoration: none;
}
:root{
    --mainColor:  #FFF2AD;
    --secondColor: #004B00;
    --whiteColor:white;
    --monteratText: "Montserrat", sans-serif;
    --fredokaText: "Fredoka", sans-serif;
    --hoverColor: #94eb81;
}


ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.app{
    width: 100%;
}




/* ------hover----- */
li:hover{
    text-decoration: underline;
    color: var(--hoverColor);
}
.acc:hover, .acc1:hover{
    background-color: var(--hoverColor);
    
}

.acc img:hover, .acc1 img:hover {
    filter: sepia(100%) hue-rotate(85deg) saturate(600%) brightness(50%);
}

.datNgay:hover{
    background-color: var(--hoverColor);
    color: var(--secondColor);
}

.tag img:hover{
    filter: sepia(100%) hue-rotate(85deg) saturate(600%) brightness(50%);
}

.mess:hover{
    background-color: var(--hoverColor);
    animation: bounce 0.5s
}


</style>