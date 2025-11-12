CREATE DATABASE form_db;

USE form_db;

CREATE TABLE product_quality_form (
    id INT AUTO_INCREMENT PRIMARY KEY,
    audit_date DATE NOT NULL,
    auditor VARCHAR(100) NOT NULL,
    product_name VARCHAR(150) NOT NULL,
    model_version VARCHAR(100) NOT NULL,
    appearance_quality VARCHAR(50) NOT NULL,
    function_quality VARCHAR(50) NOT NULL,
    material_quality VARCHAR(50) NOT NULL,
    dimension_quality VARCHAR(50) NOT NULL,
    overall_quality VARCHAR(50) NOT NULL,
    recommendation TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
