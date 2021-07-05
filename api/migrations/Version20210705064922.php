<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210705064922 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE greeting_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE angle_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE blueprint_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE client_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE coat_type_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE compound_family_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE external_finish_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE frame_quality_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE isolant_type_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE module_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE module_compound_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE payment_method_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE product_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE project_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE provider_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE quote_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE quote_state_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE range_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE room_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE angle (id INT NOT NULL, module_id INT NOT NULL, section VARCHAR(50) NOT NULL, length INT NOT NULL, is_entrant BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE blueprint (id INT NOT NULL, project_id INT NOT NULL, creation_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, last_modification_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, last_modified_by INT NOT NULL, surface INT NOT NULL, room_number INT NOT NULL, floor_number INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE client (id INT NOT NULL, last_name VARCHAR(20) NOT NULL, first_name VARCHAR(20) NOT NULL, address VARCHAR(50) NOT NULL, postal_code INT NOT NULL, city VARCHAR(20) NOT NULL, phone_number INT NOT NULL, email VARCHAR(40) NOT NULL, creation_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE coat_type (id INT NOT NULL, label VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE compound_family (id INT NOT NULL, label VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE external_finish (id INT NOT NULL, label VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE frame_quality (id INT NOT NULL, label VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE isolant_type (id INT NOT NULL, label VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE module (id INT NOT NULL, product_id INT NOT NULL, range_id INT NOT NULL, label VARCHAR(30) NOT NULL, measure_unit INT NOT NULL, caracteristics VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE module_compound (id INT NOT NULL, family_id INT NOT NULL, nature VARCHAR(30) NOT NULL, characteristics VARCHAR(40) NOT NULL, unit_usage VARCHAR(40) NOT NULL, unit_price INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE payment_method (id INT NOT NULL, label VARCHAR(40) NOT NULL, percentage_sum INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE product (id INT NOT NULL, range_id INT NOT NULL, label VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE project (id INT NOT NULL, quote_id INT NOT NULL, salesman_id INT NOT NULL, client_id INT NOT NULL, name VARCHAR(40) NOT NULL, reference VARCHAR(40) NOT NULL, creation_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE provider (id INT NOT NULL, company_name VARCHAR(100) NOT NULL, address VARCHAR(100) NOT NULL, postal_code INT NOT NULL, city VARCHAR(30) NOT NULL, email VARCHAR(50) NOT NULL, phone INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE quote (id INT NOT NULL, state_id INT NOT NULL, creation_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, last_modification_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, last_modified_by INT NOT NULL, total_with_tax INT NOT NULL, total_without_tax INT NOT NULL, discount INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE quote_state (id INT NOT NULL, label VARCHAR(20) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE range (id INT NOT NULL, external_finish_id INT NOT NULL, isolant_type_id INT NOT NULL, frame_quality_id INT NOT NULL, coat_type_id INT NOT NULL, label VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE room (id INT NOT NULL, creation_date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, created_by INT NOT NULL, surface INT NOT NULL, label VARCHAR(30) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('DROP TABLE greeting');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE angle_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE blueprint_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE client_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE coat_type_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE compound_family_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE external_finish_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE frame_quality_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE isolant_type_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE module_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE module_compound_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE payment_method_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE product_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE project_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE provider_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE quote_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE quote_state_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE range_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE room_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE greeting_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE greeting (id INT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('DROP TABLE angle');
        $this->addSql('DROP TABLE blueprint');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE coat_type');
        $this->addSql('DROP TABLE compound_family');
        $this->addSql('DROP TABLE external_finish');
        $this->addSql('DROP TABLE frame_quality');
        $this->addSql('DROP TABLE isolant_type');
        $this->addSql('DROP TABLE module');
        $this->addSql('DROP TABLE module_compound');
        $this->addSql('DROP TABLE payment_method');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE project');
        $this->addSql('DROP TABLE provider');
        $this->addSql('DROP TABLE quote');
        $this->addSql('DROP TABLE quote_state');
        $this->addSql('DROP TABLE range');
        $this->addSql('DROP TABLE room');
    }
}
