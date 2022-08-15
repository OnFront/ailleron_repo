const url = 'https://api.lever.co/v0/postings/ailleron?mode=json&location=krakow';


//Checking for potential Lever source or origin parameters
var pageUrl = window.location.href;
var leverParameter = '';
var trackingPrefix = '?lever-'

if (pageUrl.indexOf(trackingPrefix) >= 0) {
    // Found Lever parameter
    var pageUrlSplit = pageUrl.split(trackingPrefix);
    leverParameter = '?lever-'+pageUrlSplit[1];
}
    

async function fetchJobs(_data) {
    const data = _data;
    const posts = data.map(post => ({
        title: post.text,
        link: post.hostedUrl+leverParameter,
        createdAt: post.createdAt
    }))
     
    return posts;
}

async function sortJobs(posts) {
    const sortPosts = posts.sort(function(a, b) {
        return b.createdAt - a.createdAt;
    })

    return sortPosts;
}

async function createJobs(result) {

    const posts = result;
    let index = 0;

    posts.forEach( post => {
        const title = post.title;
        const link = post.link;
        const created = post.createdAt;

        index < 6 ? createPost() : '';

        function createPost() {
            $('#job-openings').append(
                `<li class="job-openings__list-item" data-item-created="${created}">
                        <h3 class="job-openings__list-title"> ${title}</h3>
                        <a class="job-openings__list-link" href="${link}">Learn More »</a>          
                </li>`
            )
        }
        
        index++;
    })
}

function createPlaceholders() {
    for (let i = 0; i < 6; i++) {
        $('#job-openings').append(
            `<li class="job-openings__list-item job-openings__list-item--placeholder" data-item-created="">
                    <h3 class="job-openings__list-title">Position...</h3>
                    <a class="job-openings__list-link" href">Learn More »</a>          
            </li>`
        )
    }
}

async function removePlaceholders() {
    $('.job-openings__list-item--placeholder').remove();
}

if($('#job-openings').hasClass('enable-api')) {
  $.ajax({
      dataType: "json",
      url: url,
      beforeSend: createPlaceholders(),
      success: async function(data){
          const posts = await fetchJobs(data);
          const sortedPosts = await sortJobs(posts);
          await removePlaceholders();
          await createJobs(sortedPosts);
      }
    });
}
