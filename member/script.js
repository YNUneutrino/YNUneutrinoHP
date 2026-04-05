const IMG_BASE = "../img/";
const DEFAULT_IMG = IMG_BASE + "unknown.png";

function getImgPath(file) {
  return IMG_BASE + (file && file.trim() ? file : DEFAULT_IMG);
}

// データ
const members = [
  {
    img: "minamino_photo.jpg",
    nameJa: "南野 彰宏",
    name: "Akihiro MINAMINO",
    role: "教授",
    email: "minamino-akihiro-??[at]ynu.ac.jp",
    profile: "https://er-web.ynu.ac.jp/html/MINAMINO_Akihiro/ja.html",   // 研究者総覧
  }, {
    img: "christophe_photo.jpg",
    nameJa: "Christophe BRONNER",
    name: "クリストフ ブロナー",
    role: "助教",
    email: "bronner-christophe-??[at]ynu.ac.jp",
    profile: "https://example.com/aaa",   // 研究者総覧
  }, {
    nameJa: "猪俣 侑希",
    name: "Yuki INOMATA",
    role: "M2",
    email: "aaa[at]ynu.jp",
    img: "24inomata.jpg",
    research: "Hyper-Kamiokande"
  }, {
    nameJa: "加藤 あおい",
    name: "Aoi KATO",
    role: "M2",
    email: "bbb[at]ynu.jp",
    img: "25kato.jpg",
    research: "Hyper-Kamiokande"
  }, {
    nameJa: "鐘 恩明",
    name: "Enming ZHONG",
    role: "M2",
    email: "bbb[at]ynu.jp",
    img: "25zhong.jpg"
  }, {
    nameJa: "平田 大悟",
    name: "Daigo HIRATA",
    role: "M2",
    email: "hirata-daigo-yc[at]ynu.jp",
    img: "24hirata.jpg",
    research: "T2K",
    comment: "みなさんを、愛しています。"
  }, {
    nameJa: "佐藤 樹",
    name: "Itsuki SATO",
    role: "M1",
    email: "bbb[at]ynu.jp",
    img: "25sato.jpg"
  }, {
    nameJa: "城下 千剣",
    name: "Chihaya JOKA",
    role: "M1",
    email: "bbb[at]ynu.jp",
    img: "25joka.jpg",
    comment: "一番好きなアニメは、「葬送のフリーレン」です。面白いので、ぜひ観てください。"
  }, {
    nameJa: "中西 風花",
    name: "Fuka NAKANISHI",
    role: "M1",
    email: "bbb[at]ynu.jp",
    img: "25nakanishi.jpg"
  }, {
    nameJa: "Mara PRIPON",
    name: "マラ プリポン",
    role: "M1 (短期留学)",
    email: "bbb[at]ynu.jp",
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
    img: "",
    email: "",
    profile: "", // 研究者総覧
    comment: ""
  },
  // {
  //   nameJa: "",
  //   name: "",
  //   role: "",
  //   email: "",
  //   img: "",
  //   email: "",
  //   profile: "https://er-web.ynu.ac.jp/", // 研究者総覧
  //   comment: ""
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
    <td class="details">
      ${m.profile ? `
        <p>🔗 <a href="${m.profile}" target="_blank">研究データベース[at]YNU</a></p>
      ` : ""}

      ${m.email ? `
        <p class="email">✉️ ${m.email}</p>
      ` : ""}

      ${m.research ? `
        <p class="research">🔬研究テーマ: ${m.research}</p>
      ` : ""}

      ${m.comment ? `
        <p class="comment">💬 ${m.comment}</p>
      ` : ""}

    </td>
  `;

  tbody.appendChild(tr);
});