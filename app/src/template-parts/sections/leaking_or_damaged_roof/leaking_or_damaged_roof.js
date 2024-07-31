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
      }
      if (index === 1) {
        const rectCard = cardWrap
          .querySelector('.rmbt-we-do-card__article-body')
          .getBoundingClientRect();
        const rectText = cardWrap
          .querySelector('.rmbt-we-do-card__article-text')
          .getBoundingClientRect();

        //   const rect2 = nl_cardWraps[index - 1]
        //     .querySelector('.rmbt-we-do-card__article-text')
        //     .getBoundingClientRect();
        //   const middleY1 = rect1.top + rect1.height;
        //   const topY2 = rect2.top;
        //   const distance = topY2 - middleY1;

        //   console.log(cardWrap.querySelector('.rmbt-we-do-card__article-text'));
        //   console.log('rect1 = ', rect1);

        console.log(
          "querySelector('.rmbt-we-do-card__article-body') = ",
          cardWrap.querySelector('.rmbt-we-do-card__article-body')
        );
        console.log(
          "querySelector('.rmbt-we-do-card__article-text') = ",
          cardWrap.querySelector('.rmbt-we-do-card__article-text')
        );
        console.log('rectCard.top = ', rectCard.top);
        console.log('rectText.bottom = ', rectText.bottom);
        console.log('rectText.top = ', rectText.top);

        console.log(
          "rectText.bottom - rectCard.top + 'px' = ",
          rectText.bottom - rectCard.top + 'px'
        );

        console.log('rectText.height  = ', rectText.height);

        svg.style.top = rectText.bottom - rectCard.top + 'px';

        //   svg.style.height = distance + 'px';
      }
    });
  });
})();
