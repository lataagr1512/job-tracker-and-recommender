const options = {
    method: 'GET',
    headers: {
        'X-RapidAPI-Key': 'bfdf466cd7mshb5bcf8aba91dfa6p1abf51jsnca0f7867176b',
        'X-RapidAPI-Host': 'udemy-course-scrapper-api.p.rapidapi.com'
    }
};

const urls = [
    // 'https://udemy-course-scrapper-api.p.rapidapi.com/course-names',
    // 'https://udemy-course-scrapper-api.p.rapidapi.com/course-names/course-instructor',
    'https://udemy-course-scrapper-api.p.rapidapi.com/course-names/course-instructor/course-url'
];
let itemArray = [];
Promise.all(urls.map(url =>
    fetch(url, options)
        .then(response => response.json())
        .then(data => data)
        .catch(error => console.error(error))
))
    .then(dataArray => {
        console.log(dataArray);
        // Do something with the data array
        Object.keys(dataArray).forEach((i) => {
            let myObj = dataArray[i];
            let value = Object.values(myObj);
            value.forEach(myFunction);
            function myFunction(item, index) {
                itemArray.push(item);
                // console.log(item);
                itemArray = itemArray.map(el => 
                    Object.fromEntries(Object.entries(el).map(([key, value]) => ([
                      key.replace('course url', 'course_url'),
                      value
                    ])))
                  );
                
                
            }
            console.log("Hello", itemArray);

            Object.keys(itemArray).forEach((i) => {
                let myObj = itemArray[i];
                let value = Object.values(myObj);
                value.forEach(myFunction);
                function myFunction(item, index) {
                    let courUrl = item;
                    console.log("bye",item);
                    let result = item.substring(29);
                    while(item>=0&&item<399){
                        let courName = item;
                        console.log("tata",courName);
                    }
                    let urls = `<h4 class="title">${result}</h4><p class="box_url"><a href="${courUrl}" class="main_url" target="_blank">${courUrl}</a></p>`
                    document.querySelector('.url_s').innerHTML += urls;
                    
                    // else if(item>=399&&item<399){
                    //     let courInstruc = item;
                    // }else{
                    //     let courUrl = item;
                    // }
                    // console.log(courUrl);
                }
            })

        })
    })
    .catch(error => console.error(error));

// console.log("Hello", itemArray);

