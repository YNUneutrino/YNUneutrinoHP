const ALUMNI_DATA_URL = "/data/alumni.json";

function getJa(value) {
  if (value && typeof value === "object") return value.ja || value.en || "";
  return value || "";
}

function renderAlumni(alumni) {
  const container = document.getElementById("alumni-area");
  container.innerHTML = "";

  const table = document.createElement("table");
  table.className = "type05";

  const headerTr = document.createElement("tr");
  [
    { label: "年月", width: "80" },
    { label: "氏名", width: "150" },
    { label: "異動前", width: "120" },
    { label: "異動後", width: "210" }
  ].forEach((header) => {
    const th = document.createElement("th");
    th.setAttribute("width", header.width);
    th.textContent = header.label;
    headerTr.appendChild(th);
  });
  table.appendChild(headerTr);

  let prevYear = null;

  alumni.forEach((person) => {
    const tr = document.createElement("tr");

    // 年度が変わったらクラス付与
    if (prevYear !== null && prevYear !== person.year) {
      tr.classList.add("year-separator");
    }
    prevYear = person.year;

    const yearTd = document.createElement("td");
    yearTd.textContent = `${person.year}年度`;
    tr.appendChild(yearTd);

    const nameTd = document.createElement("td");
    nameTd.textContent = getJa(person.name);
    tr.appendChild(nameTd);

    const gradeTd = document.createElement("td");
    gradeTd.textContent = `${person.grade}(${person.year}年度)`;
    tr.appendChild(gradeTd);

    const careerTd = document.createElement("td");
    careerTd.textContent = getJa(person.career);
    tr.appendChild(careerTd);

    table.appendChild(tr);
  });

  container.appendChild(table);
}

fetch(ALUMNI_DATA_URL)
  .then((res) => res.json())
  .then((alumni) => {
    renderAlumni(alumni);
  });
