// const req = new XMLHttpRequest();
let data;
// req.onload = function () {
//   data = JSON.parse(this.responseText);
//   console.log(data);
// };

// req.onerror = function () {
//   console.log("Error", this);
// };

// req.open("GET", "https://swapi.dev/api/people/1");
// myReq.setRequestHeader("Accept", "application/json");
// req.send();
// end versi XMLHttpRequest

// versi fetch

// fetch("https://swapi.dev/api/people/1")
//   .then((res) => {
//     if (!res.ok) {
//       throw Error("Could Not Fetch The Data For That Resource");
//     }
//     // console.log(res);
//     return res.json();
//   })
//   .then((data) => {
//     console.log("json 1", data);
//     return fetch("https://swapi.dev/api/people/2");
//   })
//   .then((res) => {
//     console.log("request 2");
//     if (!res.ok) {
//       throw Error("Could Not Fetch The Data For That Resource");
//     }
//     return res.json();
//   })
//   .then((data) => {
//     console.log(data);
//   })

//   .catch((err) => {});
// console.log("Error", err);

// End Versi Fetch

// const loadPeople = async () => {
//   try {
//     const res = await fetch("https://swapi.dev/api/people/1");
//     const data = await res.json();
//     console.log(data);
//     const res2 = await fetch("https://swapi.dev/api/people/5");
//     const data2 = await res2.json();
//     console.log(data2);
//   } catch (err) {
//     console.log("error", err);
//   }
// };

// loadPeople();
// end versi fetch 2

// starter versi axios
// axios
//   .get("https://swapi.dev/api/people/1")
//   .then((res) => {
//     console.log(res);
//   })
//   .catch((err) => {
//     console.log(err);
//   });
// let data;
//versi fetch

// const getPeople = async (id) => {
//   try {
//     const res = await axios.get(`https://swapi.dev/api/people/${id}`);
//     console.log(res.data);
//   } catch (error) {
//     console.log(error);
//     console.log(error.message);
//     console.log(error.response.status);
//     console.log(error.response.data);
//   }
// };

//Data Headers Request With Axios
const jokes = document.querySelector("#jokes");
const button = document.querySelector("button");

const addJoke = async () => {
  const jokeText = await getJokes();
  const newLI = document.createElement("LI");
  newLI.append(jokeText);
  jokes.append(newLI);
};

const getJokes = async () => {
  try {
    const config = {
      headers: {
        Accept: "application/json",
      },
    };
    const res = await axios.get("https://icanhazdadjoke.com/", config);
    return res.data.joke;
  } catch (error) {
    return "No Jokes Available";
  }
};

button.addEventListener("click", addJoke);
