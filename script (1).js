let names = [
    "Introduction to Computing",
    "Computer Programming 1, Laboratory",
    "Computer Programming 1, Lecture",
    "Mathematics in the Modern World",
    "Science, Technology and Society",
    "Fundamentals of Math Analysis",
    "Discrete Structures",
    "Computer Programming 2, Laboratory",
    "Computer Programming 2, Lecture",
    "Linear Algebra",
    "Differential and Integral Calculus",
    "Data Structures and Algorithms, Laboratory",
    "Data Structures and Algorithms, Lecture",
    "Human Computer Interaction",
    "Combinatorics and Graph Theory",
    "Object Oriented Programming, Laboratory",
    "Object Oriented Programming, Lecture",
    "Computer Architecture and Organization, Lab",
    "Computer Architecture and Organization, Lec",
    "Information Management, Laboratory",
    "Information Management, Lecture",
    "Applications Development and Emerging Technologies",
    "Operating Systems, Laboratory",
    "Operating Systems, Lecture",
    "Programming Language (Design and Implementation), Lab",
    "Programming Language (Design and Implementation), Lec",
    "Design and Analysis of Algorithms",
    "Networks and Communications, Laboratory",
    "Networks and Communications, Lecture",
    "Probability and Statistics",
    "Web Development, Laboratory",
    "Web Development, Lecture",
    "Information Assurance and Security",
    "Data Analytics",
    "Software Engineering 1, Laboratory",
    "Software Engineering 1, Lecture",
    "Parallel and Distributed Computing",
    "CS Professional Elective 1",
    "CS Professional Elective 2",
    "Methods of Research in Computing",
    "Automata Theory and Formal Language",
    "Artificial Intelligence, Laboratory",
    "Artificial Intelligence, Lecture",
    "Modeling and Simulation",
    "Software Engineering 2, Laboratory",
    "Software Engineering 2, Lecture",
    "CS Professional Elective 3",
    "CS Professional Elective 4",
    "Thesis Writing 1",
    "Social and Professional Issues",
    "Living in the IT Era",
    "Supervised Industrial Training",
    "Thesis Writing 2",
    "Pre-Calculus",
   
    "Organization and Management Concepts",
    "Accounting and Financial Management",
    "Business Process Management",
    "IT Infrastructure and Network Technologies",
    "Business Intelligence",
    "IS Professional Elective 1",
    "IS Professional Elective 2",
    "Systems Analysis and Design",
    "Financial Management Information Systems",
    "IS Project Management 1",
    "Quantitative Methods",
    "Information Assurance and Security 1",
    "Information Assurance and Security 2",
    "IS Professional Elective 3",
    "IS Professional Elective 4",
    "Enterprise Architecture",
    "IS Strategy, Management and Acquisition",
    "Evaluation of Business Performance",
    "IS Capstone Project 1",
    "IS Capstone Project 2",
    "Professional Issues in Information Systems",
    "Supervised Industrial Training (486 hours)",

    "Platform Technologies, Laboratory",
    "Platform Technologies, Lecture",
    "Quantitative Methods (Inc. Modeling & Simulation)",
    "Multimedia Authoring & Production, Laboratory",
    "Multimedia Authoring & Production, Lecture",
    "IT Professional Electve 1",
    "IT Professional Electve 2",
    "IT Professional Electve 3",
    "IT Professional Electve 4",
    "Advanced Database Systems, Laboratory",
    "Advanced Database Systems, Lecture",
    "Systems Integration and Architecture 1",
    "Systems Integration and Architecture 2",
    "Systems Administration and Maintenance",
    "IT Capstone & Research 1",
    "IT Capstone & Research 2",


];
let sortedNames =  names.sort();
console.log(sortedNames);

let input = document.getElementById("input");

input.addEventListener("keyup", (e) => {
    //loop through above the array
    //initially remove all elements
    removeElements();
    for (let i of sortedNames) {
        //convert input to lowercase and compare with each string
        
        if (i.toLowerCase().startsWith(input.value.toLowerCase()) && input.value != ""){
            //create li element

            let listItem = document.createElement("li");
            //One common class name
            listItem.classList.add("list-items");
            listItem.style.cursor = "pointer";
            listItem.setAttribute("onclick", "displayNames('" + 
            i + "')");
            //display matched part in bold
            let word = "<b>" + i.substr(0,input.value.length) + "</b>";
            word += i.substr(input.value.length);
            
            //display the value in array

            listItem.innerHTML = word;
            document.querySelector(".list").appendChild(listItem);
        }
    }
}
);

function displayNames(value){
    input.value = value;
    removeElements();
}
function removeElements() {
    //clear all the items
    let items = document.querySelectorAll(".list-items");
    items.forEach((item) => {
        item.remove();
    });
}
