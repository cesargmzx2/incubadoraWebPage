package com.zafirasystems.www.cim2018;

import android.support.annotation.NonNull;
import android.support.design.widget.BottomNavigationView;
import android.support.v4.app.Fragment;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.MenuItem;
import android.widget.FrameLayout;

public class HomeActivity extends AppCompatActivity {

    //private BottomNavigationView mMainNav;
    //private FrameLayout mMainFrame;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);

       // mMainFrame = (FrameLayout) findViewById(R.id.main_frame);
       // mMainNav = (BottomNavigationView) findViewById(R.id.main_nav);
        BottomNavigationView bottomNav = findViewById(R.id.main_nav);
        bottomNav.setOnNavigationItemSelectedListener(navListener);

    }
    private BottomNavigationView.OnNavigationItemSelectedListener navListener = new BottomNavigationView.OnNavigationItemSelectedListener() {
        @Override
        public boolean onNavigationItemSelected(@NonNull MenuItem item) {
            Fragment selectedFragment = null;

            switch (item.getItemId()){
                case R.id.nav_programa:
                    selectedFragment = new  ProgramaFragment();
                break;

                case R.id.nav_ponentes:
                    selectedFragment = new PonentesFragment();
                break;

                case R.id.nav_registro:
                    selectedFragment = new RegistroFragment();
                break;

            }

            getSupportFragmentManager().beginTransaction().replace(R.id.main_frame, selectedFragment).commit();

            return true;
        }
    };
}
