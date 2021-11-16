import java.sql.*;

class test
{
   public static void main(String ... args)throws Exception
   {
    
    Class.forName ("com.mysql.cj.jdbc.Driver");
       String dburl="jdbc:mysql://localhost:3306/student";
       String uname="root";
       String pass="root";
       //1. get a connection
       System.out.println("DataBase is not connected");
       Connection myconnect=DriverManager.getConnection(dburl, uname, pass);
       
       //2. make a statement
       System.out.println("Database connected");
       Statement mystatement=myconnect.createStatement();
       
       //Insert into table
       /*String sqlquery="insert into tb1(surname,lastname,phone) values ('kolli','jogi naidu', '9874563210');";
       mystatement.executeUpdate(sqlquery);
       System.out.println("Inserted successfully");*/
       
       
       //Update the table
       /*String updatequery="update tb1 "+"set phone='9632587401'  "+"where id=2";
       mystatement.executeUpdate(updatequery);
       System.out.println("Updated Successfully");*/
       
       //3. execute statement
       ResultSet myresultset=mystatement.executeQuery("select * from tb1");
       
       //4. process statement
      while(myresultset.next())
       {
         System.out.println("Student full name: "+myresultset.getString("surname")+" "+myresultset.getString("lastname"));
       }
      try
      {
      
       }
       catch(Exception e)
       {
        System.out.println(e.getMessage()); 
       }
     }
    
   }
   
    
