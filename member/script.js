const IMG_BASE = "../img/";
const DEFAULT_IMG = IMG_BASE + "unknown.png";

function getImgPath(file) {
  return IMG_BASE + (file && file.trim() ? file : DEFAULT_IMG);
}

fetch("members.json")
  .then(res => res.json())
  .then(members => {
    const tbody = document.getElementById("members");

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
            <p>🔗 <a href="${m.profile}" target="_blank">
              研究データベース[at]YNU
            </a></p>
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
  });
