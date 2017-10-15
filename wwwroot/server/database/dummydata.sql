CREATE TABLE IF NOT EXISTS items (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  name TEXT NOT NULL,
  model TEXT NOT NULL,
  mac_address TEXT NOT NULL
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