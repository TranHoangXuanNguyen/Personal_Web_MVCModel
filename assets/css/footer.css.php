<style>
    /* ------------footer----------- */
.footer {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between; /* Đặt các phần đều ra hai bên */
  height: 198px;
  background-color: var(--secondColor);
  padding: 0 50px; /* Thêm padding hai bên */
}

.footer-contact {
  display: flex;
}

.address,
.personal-contact {
  display: flex;
  flex-direction: column;
  /* padding: 0 8px; */
}

.address div,
.personal-contact div {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.address img,
.personal-contact img {
  margin-right: 10px;
}

.time,
.street,
.phone,
.email {
  font-size: 15px;
  padding: 10px;
  color: var(--whiteColor);
  font-family: var(--monteratText);
}

.time img {
  height: 40px;
  padding-right: 15px;
}

.street img {
  text-align: center;
  height: 40px;
  padding-right: 30px;
}

.phone img {
  height: 40px;
  padding-right: 25px;
}

.email img {
  height: 30px;
  padding-right: 17px;
}

.phone {
  margin-top: 10px;
}

.brand {
  font-size: 75px;
  font-family: var(--fredokaText);
  color: white;
  font-weight: bold;
  text-align: left;
  justify-content: center;
  flex-grow: 2;
  padding: 50px 0;
  margin-right: 10px;
}

.social {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 77px;
  flex-grow: 1;
}
</style>