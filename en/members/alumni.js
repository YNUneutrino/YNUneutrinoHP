const ALUMNI_DATA_URL = "/data/alumni.json";

function getKana(value) {
  if (value && typeof value === "object") return value.en || value.ja || "";
  return value || "";
}

function renderAlumni(alumni) {
  const container = document.getElementById("alumni-area");
  container.innerHTML = "";

  const table = document.createElement("table");
  table.className = "type05";

  const headerTr = document.createElement("tr");
  [
    { label: "Fiscal year", width: "80" },
    { label: "Name", width: "150" },
    { label: "Position@YNU", width: "120" },
    { label: "New position", width: "210" }
  ].forEach((header) => {
    const th = document.createElement("th");
    th.setAttribute("width", header.width);
    th.textContent = header.label;
    headerTr.appendChild(th);
  });
  table.appendChild(headerTr);

  alumni.forEach((person) => {
    const tr = document.createElement("tr");

    const yearTd = document.createElement("td");
    yearTd.setAttribute("width", "80");
    yearTd.textContent = `${person.year}`;
    tr.appendChild(yearTd);

    const nameTd = document.createElement("td");
    nameTd.setAttribute("width", "150");
    nameTd.textContent = getKana(person.name);
    tr.appendChild(nameTd);

    const gradeTd = document.createElement("td");
    gradeTd.setAttribute("width", "120");
    gradeTd.textContent = `${person.grade}(FY${person.year})`;
    tr.appendChild(gradeTd);

    const careerTd = document.createElement("td");
    careerTd.setAttribute("width", "210");
    careerTd.textContent = getKana(person.career);
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
