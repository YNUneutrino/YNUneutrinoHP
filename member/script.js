const IMG_BASE = "../img/";
const DEFAULT_IMG = IMG_BASE + "unknown.png";

function getImgPath(file) {
  return IMG_BASE + (file && file.trim() ? file : DEFAULT_IMG);
}

// データ
const members = [
  {
    nameJa: "猪俣 侑希",
    name: "Yuki INOMATA",
    role: "M2",
    email: "aaa@mail.jp",
    img: "24inomata.jpg"
  }, {
    nameJa: "加藤 あおい",
    name: "Aoi KATO",
    role: "M2",
    email: "bbb@mail.jp",
    img: "25kato.jpg"
  }, {
    nameJa: "鐘 恩明",
    name: "Enming ZHONG",
    role: "M2",
    email: "bbb@mail.jp",
    img: "25zhong.jpg"
  }, {
    nameJa: "平田 大悟",
    name: "Daigo HIRATA",
    role: "M2",
    email: "bbb@mail.jp",
    img: "24hirata.jpg"
  }, {
    nameJa: "佐藤 樹",
    name: "Itsuki SATO",
    role: "M1",
    email: "bbb@mail.jp",
    img: "25sato.jpg"
  }, {
    nameJa: "城下 千剣",
    name: "Chihaya JOKA",
    role: "M1",
    email: "bbb@mail.jp",
    img: "25joka.jpg"
  }, {
    nameJa: "中西 風花",
    name: "Fuka NAKANISHI",
    role: "M1",
    email: "bbb@mail.jp",
    img: "25nakanishi.jpg"
  }, {
    nameJa: "Mara PRIPON",
    name: "マラ プリポン",
    role: "M1 (短期留学)",
    email: "bbb@mail.jp",
    img: "26mara.jpg"
  }, {
    nameJa: "Clément BOUQUET",
    name: "クレモン ブケ",
    role: "M1 (短期留学)",
    email: "[at]ynu.jp",
    img: "26clement.jpg"
  }, {
    nameJa: "小島 滉人",
    name: "Hiroto KOJIMA",
    role: "B4",
    email: "kojima-hiroto-??[at]ynu.jp",
    img: "26kojima.jpg"
  }, {
    nameJa: "",
    name: "",
    role: "",
    email: "",
    img: ""
  }, {
    nameJa: "",
    name: "",
    role: "",
    email: "",
    img: ""
  }, {
    nameJa: "",
    name: "",
    role: "",
    email: "",
    img: ""
  }, {
    nameJa: "",
    name: "",
    role: "",
    email: "",
    img: ""
  }, {
    nameJa: "",
    name: "",
    role: "",
    email: "",
    img: ""
  }
  // , {
  //   nameJa: "",
  //   name: "",
  //   role: "",
  //   email: "",
  //   img: ""
  // }
];

// HTMLのtbodyを取得
const tbody = document.getElementById("members");

// メンバーを追加
members.forEach(m => {
  const tr = document.createElement("tr");
  tr.classList.add("member");

  tr.innerHTML = `
    <th>
      <img src="${getImgPath(m.img)}"
          class="photo"
          onerror="this.src='${DEFAULT_IMG}'">
    </th>
    <td class="info">
      <p class="role">${m.role}</p>
      <p class="name-ja">${m.nameJa}</p>
      <p class="name">${m.name}</p>
    </td>
    <td class="contact">
      <p>
        e-mail: ${m.email}
      </p>
    </td>
  `;

  tbody.appendChild(tr);
});