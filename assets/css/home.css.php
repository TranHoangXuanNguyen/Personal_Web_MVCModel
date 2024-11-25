<style>
.user--option{
    background-color: var(--mainColor);
    /* border: 1px solid var(--secondColor); */
    position: absolute;
    top: calc(100% + 5px);
    right: 9%;
    border-radius: 4px;
    display: none;
}
.user--option--menu--item{
    padding: 5px;
    border: 1px solid var(--secondColor);
    cursor: pointer;
}
.user--option--menu--item:hover{
    background-color: var(--secondColor);
    color: var(--whiteColor);
    opacity: 0.7;
}

/* -----------------Chao Mung------------ */
.chaoMung {
    /* margin-top: 50px; */
    display: flex;
    align-items: center;
    background-color: var(--mainColor);
    padding: 50px 0 80px 200px;
    position: relative;
    width: 100%;
    overflow: hidden; /* Ẩn các phần tử vượt ra ngoài */
}
.chaoMungToi p{
    font-size: 18px;
    margin-bottom: 30px;
    font-family: var(--monteratText);
}
.chaoMungToi div{
    font-size: 70px;
    font-family: var(--fredokaText);
    margin-bottom: 30px;
    color: var(--secondColor)
}
.chaoMungToi button{
    padding: 10px 40px;
    border-radius: 20px;
    background-color: var(--secondColor);
    color: var(--whiteColor);
    font-family: var(--monteratText);
    font-weight: bold;
    font-size: 30px;
}
.chaoMungImg{
    position: relative;
}  
.hinhTronLon {
    width: 1500px;
    height: 1500px;
    background-color: #EB8911;
    position: absolute;
    right: -1600px;
    top: -1300px;
    border-radius: 50%;

}
.diaCom {
    position: absolute;
    top: -150px;
    right: -600px
}
.diaCom img {
    width: 400px;
    height: 400px;
}

/* ---------Bua an dinh duong--------- */
.buaAnLon{
    padding: 80px 80px 30px 200px;
    background-color: var(--mainColor); 
    position: relative;
}
.buaAn{
    display: flex;
}
.buaAnImg img{
    width: 600px;
    height: 400px;
}

.buaAnText div{
    font-family: var(--fredokaText);
    text-align: right;
    font-size: 80px;
    font-weight: bold;
    color: var(--secondColor);
}
.buaAnText p{
    margin: 20px 0 0 60px;
    text-align: center;
    font-size: 18px;
    font-family: var(--monteratText);
}

/* --------Mon an noi bat------ */
.text{
    color: var(--secondColor);
    font-family: var(--fredokaText);
    font-size: 80px;
    text-align: center;
    font-weight: bold;
    background-color: var(--mainColor);
    padding: 73px 0;
}

.monAnNoiBat{
    display: flex;
    justify-content: center;
    align-items: center; 
    background-color: var(--mainColor);
    gap: 95px;
    padding-top: 90px;
}

.under{
    display: flex;
    
}

.box {
    display: flex;
    flex-direction: column;
    justify-content: flex-end; 
    width: 334px; 
    height: 318px;
    border-radius: 20px;
    background-color: var(--secondColor);

}
.doAn{
    position: relative;
}
.anhDoAn{
    position: absolute;
    left: 27px;
    top: -130px
}
.anhDoAn1{
    position: absolute;
    left:17px;
    top: -130px
}
.under{
    display: flex;
}

.buttonPrice div button{
    margin-top: 7px;
    border-radius: 20px;
    width: 141px;
    font-family: var(--monteratText);
    color: var(--secondColor);
    
}
.nameDoAn{
    margin-left: 20px;
    font-size: 30px;
    font-family: var(--fredokaText);
    color: rgb(242, 191, 22);
    font-weight: bold;
}
.buttonPrice{
    margin: 21px 0 21px 18px;
}
.tag img {
    width: 45px;
    height: 45px;
    margin: 26px 0 0 100px;
}
/* -------Xem tat va Menu------ */
.allMenu, .textMenu, .textBook {
    display: flex;
    justify-content: center;
    align-items: center; 
    flex-direction: column;
    text-align: center;
    background-color: var(--mainColor);
}


.allMenu button{
    width: 519px;
    height: 72px;
    font-size: 45px;
    border-radius: 20px;
    border: none;
    background-color: var(--secondColor);
    color:white;
    font-family: var(--fredokaText);
    font-weight: bold;
    margin-top: 100px;
    position: relative;
}
.textMenu p{
   font-size: 18px;
   font-family: var(--monteratText);
   margin-top: 10px;
}

.textBook{
    font-size: 80px;
    font-family: var(--fredokaText);
    font-weight: bold;
    color: var(--secondColor);
    padding-top: 25px;
}

/* ----lien he dat tiec--- */
.imgDatTiec{
    background-color:var(--mainColor);
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 42px;
    gap: 75px
}
.imgDatTiec img{
    width: 348px;
    height: 250px;
}

.contact{
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: var(--mainColor);
    padding-bottom: 42px;
}

.contact div{
    width: 402px;
    height: 73px;
    font-size: 30px;
    font-family: var(--monteratText);
    background-color:#B5DA92;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
}

.map{
    width: 100%;
    background-color:#B5DA92 ;
    text-align: center;
    padding: 19px;
}
.map div iframe{
    width: 934px;
    height: 466px;
    border-radius: 20px;
} 

.buaAnLon{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: -100px;
}
a {
    text-decoration: none; /* Bỏ gạch chân mặc định */
    color: inherit; /* Giữ nguyên màu sắc từ thẻ cha */
    cursor: pointer; /* Đặt con trỏ chuột là pointer */
  }




</style>