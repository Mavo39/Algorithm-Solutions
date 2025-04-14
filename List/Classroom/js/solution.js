// ②
class Student {
    constructor(studentId, firstName, lastName, gradeLevel){
        this.studentId = studentId;
        this.firstName = firstName;
        this.lastName = lastName;
        this.gradeLevel = gradeLevel;
    }

    getStudentInfo(){
        return `${this.studentId}: ${this.firstName} ${this.lastName}(${this.gradeLevel}gr)`;
    }
}

class Classroom {
    constructor(students, courseName, teacher){
        this.students = students;
        this.courseName = courseName;
        this.teacher = teacher;
    }

    getClassIdentity(){
        return `${this.courseName} managed by ${this.teacher}`;
    }

    getNumberOfStudents(){
        return this.students.length;
    }
}

module.exports = { Student, Classroom };