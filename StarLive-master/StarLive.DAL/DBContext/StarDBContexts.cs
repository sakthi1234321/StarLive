using StarLive.DAL.Entity;
using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace StarLive.DAL.DBContext
{

    public partial class StarDBContexts : DbContext
    {
        static StarDBContexts()
        {
            Database.SetInitializer<StarDBContexts>(new CreateDatabaseIfNotExists<StarDBContexts>());
        }
        public StarDBContexts()
            : base("name=StartLive")
        {
        }

        public DbSet<User> AppUsers { get; set; }
        public DbSet<UserType> UserTypes { get; set; }

        public DbSet<Video> Videos { get; set; }
        public DbSet<VideoCategory> VideoCategorys { get; set; }
    }
}
