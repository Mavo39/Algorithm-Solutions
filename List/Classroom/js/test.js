const { Student, Classroom } = require('./solution');

let classroom1 = new Classroom([new Student("AC-343424", "James", "Smith", 6), new Student("AC-343428", "Maria", "Garcia", 5),new Student("AC-343434", "Robert", "Johnson", 3),new Student("AC-343454","Danny", "Robertson",10)], "Algebra II", "Emily Theodore");

let classroom2 = new Classroom([new Student("AC-340014","Kent", "Carter",9), new Student("AC-340024","Isaiah", "Chambers",10),new Student("AC-340018","Leta", "Ferguson",7)], "English", "Daniel Pherb");

let school = [classroom1, classroom2];

function printHonorsStudents(){
    for(let i = 0; i < school.length; i++){
        // Classroom
        let classroom = school[i];
        for(let j = 0; j < classroom.students.length; j++){
            // Classroomの中のStudent(studentsで各生徒にアクセス)
            let student = classroom.students[j];
            if(student.gradeLevel >= 10){
                console.log(`${student.getStudentInfo()} from ${classroom.teacher}'s class`);
            }
        }
    }   
}

printHonorsStudents(school);

