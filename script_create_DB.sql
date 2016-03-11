#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: User
#------------------------------------------------------------

CREATE TABLE User(
        id_user      Int NOT NULL ,
        login        Varchar (128) NOT NULL,
        password     Varchar (128) NOT NULL ,
        nom          Varchar (64) ,
        prenom       Varchar (64) ,
        adresse      Varchar (128) ,
        code_postale Varchar (128) ,
        telephone    Varchar (128) ,
        mail         Varchar (128) ,
        privilege    Varchar (128) ,
        PRIMARY KEY (id_user )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Professeur
#------------------------------------------------------------

CREATE TABLE Professeur(
        id_user Int NOT NULL ,
        PRIMARY KEY (id_user )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: rf
#------------------------------------------------------------

CREATE TABLE rf(
        id_user Int NOT NULL ,
        PRIMARY KEY (id_user )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: admin
#------------------------------------------------------------

CREATE TABLE admin(
        id_user Int NOT NULL ,
        PRIMARY KEY (id_user )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Matiere
#------------------------------------------------------------

CREATE TABLE Matiere(
        id_matiere   Int NOT NULL ,
        ref          Varchar (25) ,
        libelle      Varchar (25) ,
        coefficient  Int ,
        credtit_ects Int ,
        id_user      Int ,
        id_formation Int ,
        PRIMARY KEY (id_matiere )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Classe
#------------------------------------------------------------

CREATE TABLE Classe(
        id_classe    Int NOT NULL ,
        libelle      Varchar (128) ,
        annee        Varchar (25) ,
        id_formation Int ,
        PRIMARY KEY (id_classe )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: eleve
#------------------------------------------------------------

CREATE TABLE eleve(
        id_user   Int NOT NULL ,
        nom       Varchar (64) NOT NULL ,
        prenom    Varchar (64) NOT NULL ,
        adresse   Varchar (128) NOT NULL ,
        ville     Varchar (128) NOT NULL ,
        telephone Varchar (128) NOT NULL ,
        mail      Varchar (128) ,
        id_classe Int ,
        PRIMARY KEY (id_user )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: note
#------------------------------------------------------------

CREATE TABLE note(
        id_note     Int NOT NULL ,
        libelle     Varchar (128) ,
        barem       Int ,
        coefficient Int ,
        date_note   Varchar (25) ,
        id_matiere  Int ,
        PRIMARY KEY (id_note )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Formation
#------------------------------------------------------------

CREATE TABLE Formation(
        id_formation Int NOT NULL ,
        libelle      Varchar (128) ,
        id_user      Int ,
        PRIMARY KEY (id_formation )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Posseder
#------------------------------------------------------------

CREATE TABLE Posseder(
        note    Int ,
        id_user Int NOT NULL ,
        id_note Int NOT NULL ,
        PRIMARY KEY (id_user ,id_note )
)ENGINE=InnoDB;

ALTER TABLE Professeur ADD CONSTRAINT FK_Professeur_id_user FOREIGN KEY (id_user) REFERENCES User(id_user);
ALTER TABLE rf ADD CONSTRAINT FK_rf_id_user FOREIGN KEY (id_user) REFERENCES User(id_user);
ALTER TABLE admin ADD CONSTRAINT FK_admin_id_user FOREIGN KEY (id_user) REFERENCES User(id_user);
ALTER TABLE Matiere ADD CONSTRAINT FK_Matiere_id_user FOREIGN KEY (id_user) REFERENCES User(id_user);
ALTER TABLE Matiere ADD CONSTRAINT FK_Matiere_id_formation FOREIGN KEY (id_formation) REFERENCES Formation(id_formation);
ALTER TABLE Classe ADD CONSTRAINT FK_Classe_id_formation FOREIGN KEY (id_formation) REFERENCES Formation(id_formation);
ALTER TABLE eleve ADD CONSTRAINT FK_eleve_id_classe FOREIGN KEY (id_classe) REFERENCES Classe(id_classe);
ALTER TABLE note ADD CONSTRAINT FK_note_id_matiere FOREIGN KEY (id_matiere) REFERENCES Matiere(id_matiere);
ALTER TABLE Formation ADD CONSTRAINT FK_Formation_id_user FOREIGN KEY (id_user) REFERENCES User(id_user);
ALTER TABLE Posseder ADD CONSTRAINT FK_Posseder_id_user FOREIGN KEY (id_user) REFERENCES eleve(id_user);
ALTER TABLE Posseder ADD CONSTRAINT FK_Posseder_id_note FOREIGN KEY (id_note) REFERENCES note(id_note);

