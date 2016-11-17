%Criar conexão com o banco de dados
%Autor: Erick Gomes
%Data: 07/11/2016
function conn = connectDB(db,user,pass,url)
   dbname = db;
   username = user;
   psw = pass;
   driver = 'com.mysql.jdbc.Driver';
   dburl = [strcat('jdbc:mysql://',url,'/') dbname];
   javaclasspath('C:\Users\UERN\Dropbox\Documentos\Mestrado em Computação\Interligência Computacional\Trabalhos\Drive\mysql-connector-java-5.1.40\mysql-connector-java-5.1.40-bin.jar');
   conn = database(dbname,username,psw, driver, dburl);
   
end