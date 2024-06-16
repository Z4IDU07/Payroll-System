/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package employee.payroll.system;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import javax.swing.JOptionPane;

/**
 *
 * @author zaid
 */
public class db {
    
    Connection conn = null;
    public static Connection java_db() {
        try {
            Class.forName("org.sqlite.JDBC");
            Connection conn = DriverManager.getConnection("jdbc:sqlite:/home/zaid/Videos/MyDb.db");
            return conn;
        } catch(ClassNotFoundException ex) {
            JOptionPane.showMessageDialog(null, "Could not load SQLite JDBC driver");
            return null;
        } catch(SQLException ex) {
            JOptionPane.showMessageDialog(null, "Could not connect to SQLite database");
            return null;
        } catch(Exception e) {
            JOptionPane.showMessageDialog(null, e);
            return null;
        }
    }
}