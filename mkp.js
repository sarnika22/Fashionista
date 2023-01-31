let searchable = [
    'Quick_Easy 5 min Makeup Tutorial',
    'Easy Fall Makeup Tutorial',
    'Beginners Eye Make Up Tutorial',
    'MakeUp Kit things for Beginners',
    'Step by step EyeShadow Tutorial',
];

const searchInput = document.getElementById('search');
const searchWrapper = document.querySelector('.wrapper');
const resultsWrapper = document.querySelector('.results');

searchInput.addEventListener('keyup', () => {
    let results= [];
    let input = searchInput.value;
    if(input.length)
    {
        results = searchable.filter((item) => {
            return item.toLowerCase().includes(input.toLowerCase());
        });
    }
    renderResults(results);
});

function renderResults(results)
{
    if(!results.length)
    {
        return searchWrapper.classList.remove('show');
    }

    let content = results
    .map((item) => {
        return '<li>${item}</li>';
    })
    .join('');

    searchWrapper.classList.add('show');
    resultsWrapper.innerHTML = '<ul>${content}</ul>';
}
