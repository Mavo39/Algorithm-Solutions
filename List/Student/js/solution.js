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

module.exports = Student;