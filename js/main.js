var usersArr = [
    {username: 'Jan Kowalski', birthYear: 1983, salary: 4200},
    {username: 'Anna Nowak', birthYear: 1994, salary: 7500},
    {username: 'Jakub Jakubowski', birthYear: 1985, salary: 18000},
    {username: 'Piotr Kozak', birthYear: 2000, salary: 4999},
    {username: 'Marek Sinica', birthYear: 1989, salary: 7200},
    {username: 'Kamila Wiśniewska', birthYear: 1972, salary: 6800},
    ]


function welcomeUsers(arr){

    var year = new Date().getFullYear()
    var welcome = ''
    for(var i=0; i<usersArr.length; i++){
        if(arr[i].salary > 15000){
            welcome = welcome + "Witaj, prezesie!\n"
        }else if(arr[i].salary < 5000){
            welcome = welcome + arr[i].username + ", szykuj się na podwyżkę!\n"
        }else if(arr[i].birthYear%2==0){
            welcome = welcome + "Witaj, " + arr[i].username + "! W tym roku kończysz " + (year - arr[i].birthYear).toString() + " lat!\n"
        }else if(arr[i].birthYear%2!=0){
            welcome = welcome + arr[i].username + ", jesteś zwolniony!\n"
        }
    }
    return welcome
}

console.log(welcomeUsers(usersArr))