using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Data.Entity;
using System.Linq;
using System.Web;

namespace sdop.Models
{
    public class Doctor
    {
        public int Id { get; set; }

        [Key]
        [Required]
        [Range(0, 99999999999)]
        public long DoctorSSN { get; set; }

        [Required]
        [StringLength(50)]
        public string DoctorFirstName { get; set; }

        [Required]
        [StringLength(50)]
        public string DoctorLastName { get; set; }

        [Range(0, 150)]
        public int DoctorAge { get; set; }

        [Range(0, 1)]
        public int DoctorGender { get; set; }

        [Range(0, 9999999999)]
        public long DoctorPhoneNumber { get; set; }

        [Range(0, 100)]
        public int DoctorYearsOfExperience { get; set; }

        [StringLength(200)]
        public string Speciality { get; set; }

        public ICollection<Salesman> Salesmen { get; set; } //visit relationship

        public ICollection<Patient> Patient { get; set; } //goto relationship

        public ICollection<Prescription> Prescription { get; set; } // prescribe relationship
    }
    public class DoctorDBContext : DbContext
    {
        public DbSet<Doctor> Doctors { get; set; }
    }
}