const form = document.querySelector("#search-form");

form.addEventListener("submit", async (e) => {
  e.preventDefault();
  const keyword = form.elements.query.value;
  const config = {
    params: { q: keyword },
  };
  const res = await axios.get("http://api.tvmaze.com/search/shows", config);
  getImages(res.data);
  form.elements.query.value = "";
});

const getImages = (show) => {
  for (let result of show) {
    if (result.show.image) {
      const img = document.createElement("img");
      img.src = result.show.image.medium;
      document.body.append(img);
    }
  }
};
