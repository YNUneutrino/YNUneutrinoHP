const DATA_URL = "/data/thesis.json";

function getJa(value) {
  if (value && typeof value === "object") return value.ja || "";
  return value || "";
}

function renderThesis(data) {
  const container = document.getElementById("thesis-area");
  container.innerHTML = "";

  // ▼ 年ごとにグループ化
  const byYear = {};
  data.forEach(item => {
    if (!byYear[item.year]) byYear[item.year] = [];
    byYear[item.year].push(item);
  });

  // ▼ 年の降順（新しい順）
  const years = Object.keys(byYear).sort((a, b) => b - a);

  years.forEach(year => {
    const yearData = byYear[year];

    // ▼ 年タイトル
    const h2 = document.createElement("h2");
    h2.textContent = `${year}年度`;
    container.appendChild(h2);

    // ▼ 修士 / 学部で分ける
    const masters = yearData.filter(d => d.type === "master");
    const bachelors = yearData.filter(d => d.type === "bachelor");

    // ===== 修士 =====
    if (masters.length > 0) {
      const p = document.createElement("p");
      p.innerHTML = "<b>修士論文</b>";
      container.appendChild(p);

      const ul = document.createElement("ul");

      masters.forEach(m => {
        const li = document.createElement("li");

        const name = getJa(m.name);
        const title = getJa(m.thesis?.title);
        const file = m.thesis?.file;

        if (file) {
          li.innerHTML = `${name}: <a href="${file}" target="_blank" rel="noopener noreferrer">${title}</a>`;
        } else {
          li.textContent = `${name}: ${title || ""}`;
        }

        ul.appendChild(li);
      });

      container.appendChild(ul);
    }

    // ===== 学部 =====
    if (bachelors.length > 0) {
      const p = document.createElement("p");
      p.innerHTML = "<b>卒業論文</b>";
      container.appendChild(p);

      const ul = document.createElement("ul");

      bachelors.forEach(b => {
        const li = document.createElement("li");

        const name = getJa(b.name);
        const title = getJa(b.thesis?.title);
        const file = b.thesis?.file;

        if (file) {
          li.innerHTML = `${name}: <a href="${file}" target="_blank" rel="noopener noreferrer">${title}</a>`;
        } else {
          li.textContent = `${name}: ${title || ""}`;
        }

        ul.appendChild(li);
      });

      container.appendChild(ul);
    }

    // ▼ 元HTMLに合わせて改行
    container.appendChild(document.createElement("br"));
  });
}

fetch(DATA_URL)
  .then(res => res.json())
  .then(data => renderThesis(data));