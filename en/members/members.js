const DATA_URL = "/data/members.json";
const IMG_BASE = "/img/";
const DEFAULT_IMG = IMG_BASE + "unknown.png";

const groups = {
  staff: "Staff",
  student: "Students"
};

function getImgPath(file) {
  if (!file || !file.trim()) return DEFAULT_IMG;
  if (/^(https?:)?\/\//.test(file) || file.startsWith("/")) return file;
  return IMG_BASE + file;
}

function getEn(value) {
  if (value && typeof value === "object") return value.en || value.ja || "";
  return value || "";
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

function renderMemberRow(table, member) {
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
  infoTd.append(` ${getEn(member.role)}`);
  appendBr(infoTd);

  const nameSpan = document.createElement("span");
  nameSpan.className = "member-name";
  nameSpan.textContent = "  \u00a0\u00a0" + getEn(member.name);
  infoTd.appendChild(nameSpan);

  tr.appendChild(infoTd);

  const detailsTd = document.createElement("td");
  detailsTd.setAttribute("width", "400");

  const profile = getValue(member, ["profile", "link"]);
  const email = getValue(member, ["email", "mail"]);

  if (profile) {
    const profile = document.createElement("a");
    profile.href = getValue(member, ["profile", "link"]);
    profile.textContent = "研究データベース@YNU";
    detailsTd.appendChild(profile);
    appendBr(detailsTd);
    appendBr(detailsTd);
  }

  if (email) {
    detailsTd.append("e-mail: " + email);
    appendBr(detailsTd);
  }

  if (member.phone) {
    detailsTd.append("電話: " + member.phone);
    appendBr(detailsTd);
  }

  tr.appendChild(detailsTd);
  table.appendChild(tr);
}

function renderMembers(members) {
  const container = document.getElementById("members-area");
  container.innerHTML = "";

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
      renderMemberRow(table, member);
    });
  });
}

fetch(DATA_URL)
  .then((res) => res.json())
  .then((members) => {
    renderMembers(members);
  });
