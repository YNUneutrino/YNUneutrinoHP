const DATA_URL = "/data/members.json";
const IMG_BASE = "/img/";
const DEFAULT_IMG = IMG_BASE + "unknown.png";

const groups = {
  staff: "スタッフ",
  student: "学生"
};

function getImgPath(file) {
  if (!file || !file.trim()) return DEFAULT_IMG;
  if (/^(https?:)?\/\//.test(file) || file.startsWith("/")) return file;
  return IMG_BASE + file;
}

function getJa(value) {
  if (value && typeof value === "object") return value.ja || value.en || "";
  return value || "";
}

function getKana(value) {
  if (value && typeof value === "object") return value.kana || value.en || "";
  return "";
}

function getValue(member, keys) {
  for (const key of keys) {
    if (member[key]) return member[key];
  }
  return "";
}

function appendBr(parent) {
  parent.appendChild(document.createElement("br"));
}

function hasMemberDetails(member) {
  const profile = getValue(member, ["profile", "link"]);
  const email = getValue(member, ["email", "mail"]);
  const phone = member.phone;
  return Boolean(profile || email || phone);
}

function appendMemberDetails(parent, member) {
  const profile = getValue(member, ["profile", "link"]);
  const email = getValue(member, ["email", "mail"]);

  if (profile) {
    const profileLink = document.createElement("a");
    profileLink.href = getValue(member, ["profile", "link"]);
    profileLink.textContent = "研究データベース@YNU";
    profileLink.style.textDecoration = "underline";
    parent.appendChild(profileLink);
    appendBr(parent);
  }

  if (email) {
    parent.append("e-mail: " + email);
    appendBr(parent);
  }

  if (member.phone) {
    parent.append("電話: " + member.phone);
    appendBr(parent);
  }
}

function createMemberDetailsCell(member) {
  const detailsTd = document.createElement("td");
  detailsTd.setAttribute("width", "400");
  appendMemberDetails(detailsTd, member);
  return detailsTd;
}

function renderMemberRow(table, member, groupKey, isMobile) {
  if (isMobile && groupKey === "staff") {
    const topTr = document.createElement("tr");
    topTr.className = "member-mobile-head";

    const photoTh = document.createElement("th");
    photoTh.setAttribute("scope", "row");

    const img = document.createElement("img");
    img.src = getImgPath(member.img);
    img.width = 150;
    img.alt = "";
    img.className = "photo01";
    img.border = "0";
    img.onerror = function () {
      this.src = DEFAULT_IMG;
    };

    photoTh.appendChild(img);
    topTr.appendChild(photoTh);

    const infoTd = document.createElement("td");
    const roleEl = document.createElement("div");
    roleEl.className = "member-role";
    roleEl.textContent = getJa(member.role);
    infoTd.appendChild(roleEl);

    const nameSpan = document.createElement("span");
    nameSpan.className = "member-name";
    nameSpan.textContent = getJa(member.name);
    infoTd.appendChild(nameSpan);

    const kanaSpan = document.createElement("div");
    kanaSpan.className = "member-kana";
    kanaSpan.textContent = getKana(member.name);
    infoTd.appendChild(kanaSpan);

    topTr.appendChild(infoTd);
    table.appendChild(topTr);

    if (!hasMemberDetails(member)) {
      return;
    }

    const detailTr = document.createElement("tr");
    detailTr.className = "member-mobile-detail";
    const detailTd = document.createElement("td");
    detailTd.colSpan = 2;
    appendMemberDetails(detailTd, member);
    detailTr.appendChild(detailTd);
    table.appendChild(detailTr);
    return;
  }

  if (isMobile && groupKey === "student") {
    const tr = document.createElement("tr");
    tr.className = "member-mobile-student";

    const photoTh = document.createElement("th");
    photoTh.setAttribute("scope", "row");

    const img = document.createElement("img");
    img.src = getImgPath(member.img);
    img.width = 150;
    img.alt = "";
    img.className = "photo01";
    img.border = "0";
    img.onerror = function () {
      this.src = DEFAULT_IMG;
    };

    photoTh.appendChild(img);
    tr.appendChild(photoTh);

    const infoTd = document.createElement("td");
    const roleEl = document.createElement("div");
    roleEl.className = "member-role";
    roleEl.textContent = getJa(member.role);
    infoTd.appendChild(roleEl);

    const nameSpan = document.createElement("span");
    nameSpan.className = "member-name";
    nameSpan.textContent = getJa(member.name);
    infoTd.appendChild(nameSpan);

    const kanaSpan = document.createElement("div");
    kanaSpan.className = "member-kana";
    kanaSpan.textContent = getKana(member.name);
    infoTd.appendChild(kanaSpan);

    tr.appendChild(infoTd);
    table.appendChild(tr);
    return;
  }

  const tr = document.createElement("tr");

  const photoTh = document.createElement("th");
  photoTh.setAttribute("scope", "row");

  const img = document.createElement("img");
  img.src = getImgPath(member.img);
  img.width = 150;
  img.alt = "";
  img.className = "photo01";
  img.border = "0";
  img.onerror = function () {
    this.src = DEFAULT_IMG;
  };

  photoTh.appendChild(img);
  tr.appendChild(photoTh);

  const infoTd = document.createElement("td");
  infoTd.setAttribute("width", "200");
  appendBr(infoTd);
  infoTd.append(` ${getJa(member.role)}`);
  appendBr(infoTd);

  const nameSpan = document.createElement("span");
  nameSpan.className = "member-name";
  nameSpan.textContent = "  \u00a0\u00a0" + getJa(member.name);
  infoTd.appendChild(nameSpan);

  appendBr(infoTd);
  infoTd.append("  \u00a0\u00a0" + getKana(member.name));
  tr.appendChild(infoTd);

  tr.appendChild(createMemberDetailsCell(member));
  table.appendChild(tr);
}

function renderMembers(members) {
  const container = document.getElementById("members-area");
  container.innerHTML = "";
  const isMobile = window.matchMedia("(max-width: 768px)").matches;

  Object.keys(groups).forEach((groupKey) => {
    const groupMembers = members.filter((member) => member.group === groupKey);
    if (groupMembers.length === 0) return;

    const heading = document.createElement("p");
    const bold = document.createElement("b");
    bold.textContent = groups[groupKey];
    heading.appendChild(bold);
    container.appendChild(heading);

    const table = document.createElement("table");
    table.className = "type03";
    container.appendChild(table);

    groupMembers.forEach((member) => {
      renderMemberRow(table, member, groupKey, isMobile);
    });
  });
}

fetch(DATA_URL)
  .then((res) => res.json())
  .then((members) => {
    renderMembers(members);
  });
