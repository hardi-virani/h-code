class Student {
    private String name;
    private int age;
    private String rollNumber;

    public Student(String name, int age, String rollNumber) {
        this.name = name;
        this.age = age;
        this.rollNumber = rollNumber;
    }

    // Getter methods (accessors)
    public String getName() {
        return name;
    }

    public int getAge() {
        return age;
    }

    public String getRollNumber() {
        return rollNumber;
    }

    // Setter methods (mutators)
    public void setName(String name) {
        this.name = name;
    }

    public void setAge(int age) {
        if (age >= 0) {
            this.age = age;
        } else {
            System.out.println("Age cannot be negative");
        }
    }

    public void setRollNumber(String rollNumber) {
        this.rollNumber = rollNumber;
    }
}

public class EncapsulationExample {
    public static void main(String[] args) {
        Student student = new Student("Alice", 20, "2023001");

        // Accessing data using getter methods
        System.out.println("Name: " + student.getName());
        System.out.println("Age: " + student.getAge());
        System.out.println("Roll Number: " + student.getRollNumber());

        // Modifying data using setter methods
        student.setName("Bob");
        student.setAge(22);
        student.setRollNumber("2023010");

        System.out.println("Updated Name: " + student.getName());
        System.out.println("Updated Age: " + student.getAge());
        System.out.println("Updated Roll Number: " + student.getRollNumber());
    }
}
