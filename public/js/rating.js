class StarWidget {
  constructor() {
    this.createStars();
    this.addEvents();
  }

  createStars() {
    const arr = [1, 2, 3, 4, 5];
    const template = `
      ${arr
        .map(i => {
          return `
          <input type="checkbox" name="" id="${i}">
          <label for="${i}">★</label>
        `;
        })
        .join("")}
    `;
    const wrap = document.querySelector(".inputs");
    wrap.innerHTML = template;
  }

  addEvents() {
    const labels = document.querySelectorAll("label");
    labels.forEach(i => {
      i.addEventListener("mouseover", e => {
        setTimeout(() => this.handleHover(e));
      });
    });

    const button = document.querySelector("button");
    button.addEventListener("click", () => this.submitRating());
  }

  handleHover(e) {
    const hovered = e.target.getAttribute("for");
    const checks = document.querySelectorAll("input");

    checks.forEach(i => {
      i.checked = false;
      if (i.id <= hovered) {
        i.checked = true;
      }
    });
  }

  submitRating() {
    const rating = document.querySelectorAll("input:checked").length;

    const error = `<p class="error">Please choose a rating</p>`;
    const success = `<p class="success">Added a ${rating} star rating</p>`;

    const msg = document.querySelector(".msg");
    msg.innerHTML = rating === 0 ? error : success;

    setTimeout(() => (msg.style.opacity = 1), 10);
    setTimeout(() => (msg.style.opacity = 0), 2000);
  }
}

new StarWidget();
