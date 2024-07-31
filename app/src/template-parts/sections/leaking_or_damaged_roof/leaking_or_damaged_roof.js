(function () {
  const nl_sections = document.querySelectorAll('.rmbt-leaking-or-damaged-roof-block');

  if (nl_sections.length === 0) {
    return;
  }

  nl_sections.forEach(section => {
    const nl_cardWraps = section.querySelectorAll('.card-wrap');

    nl_cardWraps.forEach((cardWrap, index, nl_cardWraps) => {
      const svg = cardWrap.querySelector('svg');

      if (index === 0) {
        const rect1 = cardWrap.getBoundingClientRect();
        const rect2 = nl_cardWraps[index + 1]
          .querySelector('.rmbt-we-do-card__article-text')
          .getBoundingClientRect();
        const middleY1 = rect1.top + rect1.height / 2;
        const topY2 = rect2.top;
        const distance = topY2 - middleY1;
        svg.style.height = distance + 'px';
      } else if (index === 1) {
        const rectCard = cardWrap
          .querySelector('.rmbt-we-do-card__article-body')
          .getBoundingClientRect();
        const rectText = cardWrap
          .querySelector('.rmbt-we-do-card__article-text')
          .getBoundingClientRect();
        svg.style.top = rectText.bottom - rectCard.top + 'px';

        const rect2 = nl_cardWraps[index + 1]
          .querySelector('.rmbt-we-do-card__article-text')
          .getBoundingClientRect();
        const distance = rect2.top - rectText.bottom;
        svg.style.height = distance + rect2.height / 2 + 'px';
      } else if (index === 2) {
        const rectCard = cardWrap
          .querySelector('.rmbt-we-do-card__article-body')
          .getBoundingClientRect();

        const circle = nl_cardWraps[index + 1]
          .querySelector('.rmbt-we-do-card__circle')
          .getBoundingClientRect();

        const distance = circle.top - rectCard.bottom + rectCard.height / 2;
        svg.style.height = distance + circle.height / 2 + 'px';
      }
    });
  });
})();
