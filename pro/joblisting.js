const options = {
  method: "GET",
  headers: {
    "X-RapidAPI-Key": "e2110a32b2msha6f7270ae906dc6p18a5e2jsn2299a863dd6f",
    "X-RapidAPI-Host": "jsearch.p.rapidapi.com",
  },
};

// const callParams = () => {
fetch(
  `https://jsearch.p.rapidapi.com/search?query=Python%20developer%20in%20Texas%2C%20USA&page=1&num_pages=1`,
  options
)
  .then((response) => response.json())
  .then((items) => {
    console.log(items);
    items.data.map((item) => {
      console.log(item);
      const employ_name = item.employer_name;
      const job_employ_type = item.job_employment_type;
      const logo = item.employer_logo;
      const job_tit = item.job_title;
      const apply_link = item.job_apply_link;
      const job_desc = item.job_description;
      const job_publish = item.job_publisher;
      const job_place = item.job_city;

      const sJobCard = `<li id="middle"> <div class="essential_detail"><div class="company-logo-img">
                <img src="${logo}" alt=""></div>
                <h2 class="job_tite">${job_tit}</h2>
                <h1 class="company_name">${employ_name}</h2>
                <button class="job-btn" id="apply"><a href="/pro/middlePage.php?job_title=${job_tit}&org_name=${employ_name}&joblink=${apply_link}" target="_blank">Apply</a></button>
                <button class="job-btn" id= "read_more" onclick="toggleHide()">Read More</button>
                <div class="skills-container">
                <div class="skill">${job_publish}</div>
                <div class="skill">${job_employ_type}</div>
                <div class="skill">${job_place}</div>
              </div>
              </div><p class="job_desc_text">${job_desc}</p></li>`;
      document.querySelector(".suggestJob_card").innerHTML += sJobCard;
      // document.querySelector('.print1').innerHTML += a1;
    });
  })
  .catch((err) => console.error(err));

// }

// readMoreBtn.addEventListener('click', readFunc);

//Python%20developer%20in%20Texas%2C%20USA&page=1&num_pages=1
