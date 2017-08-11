<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

		 $depts = [
		    "Agriculture", "Animal Science", "Soil Science", "Agric. Economics", "Agric. Extension", "Arts", "Mass Communication", "Archaeology & Tourism", "History & International Studies", "Fine & Applied Arts", "Performing Arts", "Music", "English & Literary Studies", "Foreign Languages", "Linguistics & Nigerian Languages", "Biological Sciences", "Microbiology", "Biochemistry", "Plant Sciences", "Zoology", "Business Administration", "Accountancy", "Marketing", "Business Administration", "Banking & Finance", "Management", "Education", "Arts Education", "Science Education", "Adult Education", "Education Foundation", "Health & Physical Education", "Library Sciences Education", "Social Science Education", "Computer Education", "Home Economics", "Vocational Teacher Education", "Engineering", "Civil Engineering", "Electronic Engineering", "Electrical Engineering", "Mechanical Engineering", "Agric. & Bioresources Engineering", "Materials & Metallurgical Engineering", "Dentistry", "Child Dental Health", "Oral Maxillofacial Surgery", "Preventive Dentistry", "Restorative Dentistry","Environmental Studies	Estate Management","Urban & Regional Planning", "Architecture", "Surveying & Geodesy", "Health Science and technology", "Medical Rehabilitation", "Nursing Sciences", "Medical Laboratory Technology", "Law", "Public & Private Law", "International Law & Jurisprudence", "Property Law", "Pharmaceutical Sciences", "Clinical Pharmacy", "Pharmaceutical and Medicinal Chemistry", " Pharmacology and Toxicology", "Pharmaceutics", "Pharmaceutical Technology", "Pharmacognosy", "Pharmacognosy and Environmental Medicines", "Physical Sciences", "Statistics", "Physics & Astronomy", "Computer Science", "Geology", "Pure and Industrial Chemistry", "Mathematics", "Social Sciences", "Philosophy", "Public Administration", "Psychology", "Economics", "Geography", "Sociology & Anthropology", "Religious and Cultural Studies", "Social Work", "Medical Sciences	Anaesthesia", "Anatomy", "Chemical Pathology", "Community Medicine", "Dermatology", "Haematology & Immunology", "Medical Biochemistry", "Medical Microbiology", "Morbid Anatomy", "Obstetrics & Gaenecology", "Ophthalmology", "Otolaringology", "Paediatrics", "Paediatric Surgery", "Pharmacology & Therapeutics", "Physiological Medicine", "Radiation Medicine", "Surgery", "Veterinary Medicine", "Veterinary pathology and Microbiology", "Veterinary Obstetrics and Reproductive Diseases", "Veterinary Physiology and Pharmacology", "Veterinary Anatomy", "Veterinary Medicine", "Veterinary Surgery", "Veterinary Parasitology & Entomology", "Animal Health & Production", "Veterinary Public Health & Preventive Medicine",
		    "Veterinary Teaching Hospital",
		];
       
       foreach( $depts as $dept){

			DB::table('departments')->insert([
	            'department' => $dept,
	        ]);
       }

    }
}
