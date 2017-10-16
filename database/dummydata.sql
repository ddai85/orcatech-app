DROP DATABASE IF EXISTS orcatech;

CREATE DATABASE orcatech;

USE orcatech;


CREATE TABLE items (
  id INT AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL,
  model VARCHAR(50) NOT NULL,
  mac_address VARCHAR(50) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO items (name, model, mac_address) VALUES ('Annes Computer', 'Macbook Pro', 'ABC1234');
INSERT INTO items (name, model, mac_address) VALUES ('Bobs Computer', 'Dell XPS13', 'XYZ1234');
INSERT INTO items (name, model, mac_address) VALUES ('Bills Computer', 'Surface Pro', 'LMN1234');
INSERT INTO items (name, model, mac_address) VALUES ('Lab Computer', 'Apple-1', '01-0001');
INSERT INTO items (name, model, mac_address) VALUES ('Office Scanner', 'Canon', '9622B002AA');
INSERT INTO items (name, model, mac_address) VALUES ('Office Fax', 'Brother', 'FAX-2840');
INSERT INTO items (name, model, mac_address) VALUES ('Copy Machine', 'Lexmark', 'X748dte');
INSERT INTO items (name, model, mac_address) VALUES ('Coffee Maker', 'Keurig', 'K575P');
INSERT INTO items (name, model, mac_address) VALUES ('Fridge', 'Frigidaire', 'FFTR1814QW');
INSERT INTO items (name, model, mac_address) VALUES ('Tea Pot', 'Breville', 'HTTP418');