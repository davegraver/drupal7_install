# Drupal 7 Base Installation 

### Setup:

1. Clone the repo:
`git clone https://github.com/davegraver/drupal7_install.git`

2. Create the database: 
`mysqladmin -u root -p create [db_name]`

3. Update *sites/default/settings.php* with the name of the database

4. From within the project folder, import the database: 
`drush sqlc -y < ref_db/drupal.sql`